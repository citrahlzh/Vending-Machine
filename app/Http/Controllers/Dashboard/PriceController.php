<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        return view('dashboard.prices.index');
    }

    public function create()
    {
        return view('dashboard.prices.create');
    }

    public function edit($id)
    {
        return view('dashboard.prices.edit', compact('id'));
    }
}
