<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $attri = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($attri)) {
            return redirect('/')->with('success', 'anda telah login');
        }
        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('/')->with('success', 'anda telah login');
        //     }
        // }
        throw ValidationException::withMessages([
            'email' => 'email / password salah',

        ]);
    }
}
