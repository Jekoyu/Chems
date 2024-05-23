<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.default', [
            'title' => 'Dashboard',
            'content' => view('admin.page.main', [
                'title' => 'Dashboard'
            ])
        ]);
        // return view('admin.page.sb');
    }

    
}
