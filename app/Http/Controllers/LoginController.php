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

    public function actionLogin(Request $request) {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Email dan password yg anda masukan
        salah'])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('/login');
    }
}
