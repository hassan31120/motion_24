<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Class FatoorahService.
 */

class FatoorahService
{

    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {

        $this->request_client = $request_client;
        $this->base_url = env('fatoorah_base_url');
        $this->headers = [
            'Content-Type' => 'application/json',
            'authorization' => 'Bearer '. env('fatoorah_token')
        ];

    }

    public function buildRequest($uri, $method, $body = [])
    {
        $request = new Request($method, $this->base_url . $uri, $this->headers);

        // if (!$body)
        //     return false;
        $response = $this->request_client->send($request, [
            'json' => $body
        ]);

        if ($response->getStatusCode() != 200) {
            // return false;
        }

        $response = json_decode($response->getBody(), true);

        return $response;

    }

    public function sendPayment($data){
        return $response = $this->buildRequest('v2/SendPayment', 'POSt', $data);
    }

    public function getPaymentStatus($data){
        return $response = $this->buildRequest('v2/getPaymentStatus', 'POSt', $data);
    }

}
