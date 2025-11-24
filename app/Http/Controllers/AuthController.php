<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function auth(Request $request) {
        $cred = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($cred)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['msg' => 'Username atau password salah']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
