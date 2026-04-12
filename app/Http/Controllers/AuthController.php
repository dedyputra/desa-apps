<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('pages.auth.login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([


            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $userStatus = Auth::user()->status;

            if ($userStatus  == 'submitted') {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun Anda belum disetujui oleh admin.',
                ])->onlyInput('email');

            } else if ($userStatus == 'rejected') {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun Anda telah ditolak oleh admin.',
                ])->onlyInput('email');
            }

            return redirect()->intended('dashboard');
        }


        return back()->withErrors([

            'email' => 'Ada Kesalahan pada email atau password yang dimasukkan!',

        ])->onlyInput('email');
    }
}
