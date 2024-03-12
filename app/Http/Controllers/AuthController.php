<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Email atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function authenticate_admin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            // $admin = Auth::guard('admin');
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }
        return back()->with('loginError', 'Email atau Password Salah');
    }
    public function logout_admin()
    {
        Auth::guard('admin')->check();
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
