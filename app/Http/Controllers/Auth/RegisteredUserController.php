<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Keygen\Keygen;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('layouts.tema.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // costumisasi nama validasinyalogin
        $validasi = [
            'required' => ':attribute jangan di kosongkan',
            'email' => 'penulisan email tidak sesuai',
            'confirmed' => 'password anda belum sesuai',
            'max' => 'password maksimal 255 karakter',
            'password.Rules' => 'minimal 8 karakter',
            'unique' => 'email yang anda masukan sdh pernah di daftarkan'
        ];
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], $validasi);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'noreg' => Keygen::numeric(10)->generate(),
            'role' => 'user', // default saat registrasi adalah sebagai user
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
