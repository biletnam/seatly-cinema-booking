<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaypalController extends Controller
{
    /**
     * Return all data to the Paypal API dashboard
     * @return mixed
     */
    public function getPage()
    {
        return view('api.paypal');
    }
}
