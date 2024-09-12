<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $response = Http::post('https://jakpreneur.jakarta.go.id/mobile/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            // Berhasil Login
            //return redirect()->route('dashboard')->with('success', 'Login successful!');
            return redirect()->back()->with('message', 'Berhasil Login!');
        } else {
            // Gagal Login
            return back()->withErrors(['login' => 'Invalid credentials.']);
        }
    }
}

