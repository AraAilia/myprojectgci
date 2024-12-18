<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import model User
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method untuk menerima pengguna
    public function acceptUser($id)
    {
        $user = User::findOrFail($id); // Cari pengguna berdasarkan ID
        $user->status = 'accepted';   // Ubah status pengguna menjadi diterima
        $user->save();                // Simpan perubahan ke database

        return redirect()->back()->with('success', 'Pengguna berhasil diterima.');
    }

    // Method untuk menolak pengguna
    public function rejectUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'rejected';
        $user->save();

        return redirect()->back()->with('success', 'Pengguna berhasil ditolak.');
    }

    // Method untuk memblokir pengguna
    public function blockUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'blocked';
        $user->save();

        return redirect()->back()->with('success', 'Pengguna berhasil diblokir.');
    }
    
}