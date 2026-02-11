<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagingTypeController extends Controller
{
    public function index()
    {
        return view('dashboard.master-data.packaging-types.index');
    }
}
