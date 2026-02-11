<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDisplayController extends Controller
{
    public function index()
    {
        return view('dashboard.product-displays.index');
    }

    public function create()
    {
        return view('dashboard.product-displays.create');
    }

    public function edit($id)
    {
        return view('dashboard.product-displays.edit', compact('id'));
    }

    public function show($id)
    {
        return view('dashboard.product-displays.show', compact('id'));
    }
}
