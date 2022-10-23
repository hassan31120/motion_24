<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Partner;
use App\Models\Price;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        $links = Link::latest()->limit(3)->get();
        $partners = Partner::all();
        return view('main.main', compact('links', 'setting', 'partners'));
    }

    public function videos(){
        $setting = Setting::find(1);
        $links = Link::latest()->paginate(6);
        return view('main.videos', compact('setting', 'links'));
    }

    public function prices(){
        $setting = Setting::find(1);
        $prices = Price::find(1);
        return view('main.prices', compact('setting', 'prices'));
    }

    public function successPay(){
        $setting = Setting::find(1);
        return view('main.success', compact('setting'));
    }

    public function errorPay(){
        $setting = Setting::find(1);
        $prices = Price::find(1);
        return view('main.error', compact('setting', 'prices'));
    }
}
