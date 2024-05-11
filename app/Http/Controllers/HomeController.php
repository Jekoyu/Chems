<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Home',
            'content' => view('page.index')
        ]);
    }
}
