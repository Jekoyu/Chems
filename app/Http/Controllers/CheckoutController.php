<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Checkout',
            'content' => view('page.checkout')
        ]);
    }
}
