<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'user' && $request->input('role') === 'user') {
                return redirect()->intended('/');
            } elseif ($user->role === 'admin' && $request->input('role') === 'admin') {
                return redirect()->intended('/admin');
            } else {
                return back()->withErrors([
                    'custom_error' => 'Akun dengan peran ini tidak sesuai',
                ])->withInput($request->except('password'));
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
