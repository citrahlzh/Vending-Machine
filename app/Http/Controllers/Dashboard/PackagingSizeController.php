<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagingSizeController extends Controller
{
    public function index()
    {
        return view('dashboard.master-data.packaging-sizes.index');
    }
}
