<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.users.index');
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function edit($id)
    {
        return view('dashboard.users.edit', compact('id'));
    }

    public function show($id)
    {
        return view('dashboard.users.show', compact('id'));
    }
}
