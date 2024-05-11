<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Single Product',
            'content' => view('page.single-product')
        ]);
    }
}
