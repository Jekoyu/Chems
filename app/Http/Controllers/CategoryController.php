<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('default', [
            'title' => 'Category',
            'content' => view('page.category')
        ]);
    }
}
