<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Penjual;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        //Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function isidata()
    {
        return view('penjual.isidata');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'toko' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'bank' => 'required|string|max:100',
            'no_rekening' => 'required|string|max:50',
        ]);

        // Debugging: Pastikan data dikirim dengan benar
  
        // Simpan data ke database
       $create= Penjual::create([
            'nama' => $request->nama,
            'toko' => $request->toko,
            'nomor_hp' => $request->nomor_hp,
            'bank' => $request->bank,
            'no_rekening' => $request->no_rekening,
            'user_id' => Auth::id(), // Mengambil ID user yang sedang login
        ]);
        // Redirect dengan pesan sukses
        return redirect()->route('penjual.index')->with('success', 'Data penjual berhasil ditambahkan!');
    }

    
}

