<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Cart',
            'content' => view('page.cart')
        ]);
    }
}
