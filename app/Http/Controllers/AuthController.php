<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
                return back()->withErrors([
                    'email' => 'Akun Anda belum disetujui oleh admin.',
                ])->onlyInput('email');
            } else if ($userStatus == 'rejected') {
                return back()->withErrors([
                    'email' => 'Akun Anda telah ditolak oleh admin.',
                ]);
            }

            return redirect()->intended('dashboard');
        }


        return back()->withErrors([

            'email' => 'Ada Kesalahan pada email atau password yang dimasukkan!',

        ])->onlyInput('email');
    }

    public function registerView()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $validated =  $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = 2;
        $user->saveOrFail();



        return redirect('/')->with('success', 'Akun berhasil dibuat. Silakan tunggu persetujuan admin untuk dapat login.');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
