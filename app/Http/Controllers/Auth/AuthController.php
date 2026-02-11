<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $remember = (bool) $request->input('remember', false);

        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password'], 'is_active' => 1], $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard.index'));
        }

        return back()->withErrors([
            'username' => 'Username atau kata sandi salah, atau akun belum aktif.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
