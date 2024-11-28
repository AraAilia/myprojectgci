<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
   
    
    public function store(Request $request)
    {
        // Validasi input yang mencakup name, email, password, dan password_confirmation
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],  // Password dan konfirmasi password harus cocok
        ]);
    
        // Membuat user dengan data yang sudah divalidasi
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => 'pembeli', // Set default role ke 'pembeli'
            'password' => Hash::make($validated['password']),
        ]);
    
        // Login otomatis setelah registrasi
        // Auth::login($user);
    
        // Kirim session untuk memberi pesan sukses
    
        // Redirect ke halaman login setelah registrasi
        return redirect('/login')->with('success','Registration successful! You are now logged in.');
    }
    
}
