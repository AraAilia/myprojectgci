<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthLogicController extends Controller
{
    public function registerPage(){
        return view('authPage.register');
    }
    public function store(Request $request)
{
    $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
        $request->session()->regenerate();

        // Redirect ke halaman pembeli
        return redirect()->route('pembeli.index'); 
    }
    if (Auth::user()->role === 'pembeli') {
        return redirect()->route('pembeli.index'); // Ganti dengan rute pembeli.dashboard
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
}
