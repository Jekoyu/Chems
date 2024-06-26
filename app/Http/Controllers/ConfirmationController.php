<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Confirmation',
            'content' => view('page.confirmation')
        ]);
    }
}
