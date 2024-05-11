<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Tracking',
            'content' => view('page.tracking')
        ]);
    }
}
