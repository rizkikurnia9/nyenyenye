<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'namaLengkap' => 'required', // Add validation for the 'namaLengkap' field
        'alamat' => 'required',
    ]);

    // Create a new user
    $user = new User([
        'username' => $request->input('username'),
        'password' => bcrypt($request->input('password')),
        'email' => $request->input('email'),
        'namaLengkap' => $request->input('namaLengkap'),
        'alamat' => $request->input('alamat'),
    ]);

    $user->save();

    // Redirect to the login page after successful registration
    return redirect('/login')->with('success', 'Registration successful. Please login.');
}

}
