<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, redirect ke halaman dashboard atau halaman yang diinginkan
            return redirect()->intended('/home');
        } else {
            // Jika otentikasi gagal, kembali ke halaman login dengan pesan kesalahan
            return redirect('/')->with('error', 'Email atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect('/');
    }
}