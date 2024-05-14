<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.default', [
            'title' => 'Dashboard',
            'content' => view('admin.page.main')
        ]);
    }
}
