<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FatoorahService;

class FatoorahFatoorah extends Controller
{
    private $fatoorahService;

    public function __construct(FatoorahService $fatoorahService)
    {
        $this->fatoorahService = $fatoorahService;
    }

    public function payOrder(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'number'    => 'required|numeric',
        ]);

        $data = [
            'NotificationOption' => 'Lnk',
            'InvoiceValue'       => $request['value'],
            'CustomerName'       => $request['name'],
            'CustomerEmail'      => $request['email'],
            'CallBackUrl'        =>  route('payment.success'),
            'ErrorUrl'           =>  route('payment.error'),
            'Language'           => 'en',
            'DisplayCurrencyIso' => 'SAR',
            'MobileCountryCode'  => '+965',
            'CustomerMobile'     => $request['number'],
        ];

        $link =  $this->fatoorahService->sendPayment($data);
        return redirect($link['Data']['InvoiceURL']);
    }

    public function PaymentCallBack(Request $request)
    {
        $data = [];
        $data['Key'] = $request->paymentId;
        $data['KeyType'] = 'paymentId';

        return 'تم الدفع بنجاح!';
        // return $this->fatoorahService->getPaymentStatus($data);
    }
}
