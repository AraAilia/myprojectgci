<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd('test');
        $request->authenticate();
    
        // Regenerasi session untuk keamanan
        $request->session()->regenerate();
    
        // Cek role pengguna dan arahkan sesuai role
        if ($request->user()->role === 'admin') {
            return redirect('/admin/dashboard'); // Arahkan ke admin dashboard
        }
    
        if ($request->user()->role === 'pembeli') {
            return redirect('/pembeli/index'); // Arahkan ke halaman utama (home) untuk pembeli
        }

        //if ($request->user()->role === 'penjual') {
           // return redirect('/mulaimenjual');
       // }
    
        // Default redirect jika role tidak dikenali, arahkan ke dashboard pengguna biasa
       // return redirect()->intended(route('dashboard'));
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/pembeli');
    }
}
