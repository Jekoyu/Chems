<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Contact',
            'content' => view('page.contact')
        ]);
    }
}
