<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ],[
            'full_name.required'=>'Ad Soyad alanı zorunludur.',
            'full_name.string'=>'Ad Soyad alanı metin olmalıdır.',
            'full_name.max'=>'Ad Soyad alanı en fazla 255 karakter olabilir.',

            'email.required'=>'E-posta alanı zorunludur.',
            'email.email'=>'Geçerli bir e-posta adresi giriniz.',
            'email.unique'=>'Bu e-posta adresi zaten kayıtlı.',

            'password.required'=>'Şifre alanı zorunludur.',
            'password.confirmed'=>'Şifreler eşleşmiyor.',
            'password_confirmation.required'=>'Şifre tekrar alanı zorunludur.',
        ]);

        User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        return redirect()->route('register')
        ->with('success', 'Kayıt başarıyla tamamlandı.');
    }
}
