<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('pages.checkout', ['plan' => $request->input('plan')]);
    }

    public function subscribe()
    {
        //pay
    }
}
