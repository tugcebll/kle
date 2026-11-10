<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required|email',
            'password' => 'required',

        ]);

        if (Auth::attempt([

            'email' => $validated['email'],
            'password' => $validated['password'],

        ])){

            $request->session()->regenerate();
            return redirect('/');

        }

        return back()->withErrors([

            'email'=>'Geçersiz e-posta veya şifre.',

        ])->onlyInput('email');



    }

    public function destroy(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Başarıyla çıkış yaptınız.');
    }

}
