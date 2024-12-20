<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
  //
  public function index()
  {
      return view('penjual.unggah');
  }

  public function store(Request $request)
  {
      $validatedData = $request->validate([
          'nama' => 'required|string|max:255',
          'kategori' => 'required|exists:kategori,id',
          'deskripsi' => 'required|string|max:255',
          'image_path' => 'required|string', 
          'harga' => 'required|numeric|min:0',
      ]);
    
      $produk = Produk::create([
          'penjual_id' => Auth::id(),
          'kategori_id' => $validatedData['kategori'],
          'deskripsi' => $validatedData['deskripsi'],
          'nama' => $validatedData['nama'],
          'image_path' => $validatedData['image_path'],
          'harga' => $validatedData['harga'],
      ]);

      return redirect()->back()->with('success','Produk berhasil ditambahkan');
  }
}
