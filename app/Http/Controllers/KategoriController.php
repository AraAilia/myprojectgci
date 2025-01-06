<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
   // Simpan kategori baru
   public function store(Request $request)
   {
       $request->validate([
           'kategori' => 'required|string|max:255',
       ]);

       Kategori::create([
           'kategori' => $request->kategori,
       ]);

       return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
   }

   // Hapus kategori
   public function destroy($id)
   {
       $kategori = Kategori::findOrFail($id);
       $kategori->delete();

       return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
   }
   public function index()
   {
       // Mengambil semua kategori dari database
       $kategori = Kategori::all(); // Ambil data kategori dari tabel kategori
       
       // Mengirim data kategori ke view
       return view('frontend.form', compact('kategori'));
   }
   // Tampilkan form edit kategori
   public function edit($id)
   {
       $kategori = Kategori::findOrFail($id);
       return view('kategori.edit', compact('kategori'));
   }

   // Update kategori
   public function update(Request $request, $id)
   {
       $request->validate([
           'kategori' => 'required|string|max:255',
       ]);

       $kategori = Kategori::findOrFail($id);
       $kategori->update([
           'kategori' => $request->kategori,
       ]);
       return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
   }
  


}
