<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi login
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
        ]);

        // Proses login (Misalnya pengecekan database, atau auth)
        if ($validated) {
            // Proses login atau redirect
            return redirect()->route('dashboard'); // Sesuaikan dengan route tujuan
        }

        return back()->withErrors(['login' => 'Login failed!']);
    }
}