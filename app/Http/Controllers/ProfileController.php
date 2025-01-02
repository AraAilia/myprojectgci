<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Penjual;

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
    
    //untuk menambahkan data profil penjual
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'toko' => 'required|string|max:255|unique:penjuals,toko',
            'nomor_hp' => 'required|string|max:15',
            'bank' => 'required|string|max:30',
            'no_rekening' => 'required|string|max:30',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
    
        // Simpan data ke database
        $penjual = new Penjual();
        $penjual->fill($validatedData);
        $penjual->save();
    
        // Redirect ke halaman My Profil

        return response()->json([
            'data' => $penjual
       ]);
        
        // return redirect()->route('profil.my')->with('success', 'Profil berhasil diperbarui!');
    }
    
}

