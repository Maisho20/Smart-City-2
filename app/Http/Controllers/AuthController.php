<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('admin_smart');
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
