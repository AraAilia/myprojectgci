<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('adminViews.dashboard');
    }

    public function users(){
        $users = User::all();
        return view('adminViews.users',compact('users'));
    }
    

    public function produk(){
    $produk = Produk::all();
    return view('adminViews.produk',compact('produk'));
    }

    public function update(Request $request, $id)
    {
        // Validasi hanya untuk kolom 'role'
        $request->validate([
            'role' => 'required|string',
        ]);

        // Temukan user berdasarkan ID
        $user = User::findOrFail($id);

        // Hanya memperbarui kolom 'role'
        $user->update([
            'role' => $request->role,
        ]);

        // Mengembalikan respons JSON yang sukses
        return redirect()->back()->with('success');
    }

}
