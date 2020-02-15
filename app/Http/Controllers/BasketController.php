<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function checkoutstep1()
    {
        return view ('basket.checkout-step1');
    }
    public function checkoutstep2()
    {
        return view ('basket.checkout-step2');
    }
    public function checkoutstep3()
    {
        return view ('basket.checkout-step3');
    }
    public function checkoutstep4()
    {
        return view ('basket.checkout-step4');
    }
}
