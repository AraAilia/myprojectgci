<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;

class ProdukController extends Controller
{
    //
    public function unggah()
    {
        return view('penjual.unggah');
    }
    public function menjual()
    {
        // Mengambil semua data produk
        $produks = Produk::all();

        // Mengirim data produk ke view 'menjual.blade.php'
        return view('menjual', compact('produks'));
    }
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all(); // Ambil semua kategori
        return view('penjual.edit', compact('produk', 'kategori'));
    }
    public function update(Request $request, $id)
{
    $product = Produk::findOrFail($id);
    $product->update($request->all());
    return redirect()->back()->with('success', 'Produk berhasil diperbarui!');
}

public function destroy($id)
{
    $product = Produk::findOrFail($id);
    $product->delete();
    return redirect()->back()->with('success', 'Produk berhasil dihapus!');
}

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
            'deskripsi' => 'required|string|max:255',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'harga' => 'required|numeric|min:0',

        ]);

        //dd(request()->all());

        // Menyimpan gambar dan mendapatkan path-nya
        $imagePath = $request->file('image_path')->store('produk_images', 'public');

        // Menyimpan data produk ke database
        $create = Produk::create([
            'penjual_id' => Auth::id(),
            'kategori_id' => $validatedData['kategori_id'],
            'deskripsi' => $validatedData['deskripsi'],
            'nama' => $validatedData['nama'],
            'image_path' => $imagePath,  // Menyimpan path gambar
            'harga' => $validatedData['harga'],
        ]);

        return redirect()->route('penjual.menjual')->with('success', 'Produk berhasil diunggah!');
    }
}
