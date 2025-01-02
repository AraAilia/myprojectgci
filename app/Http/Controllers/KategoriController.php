<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    
   // Tampilkan halaman kategori
   public function index()
   {
       $kategori = Kategori::all() ?: collect(); 
       ($kategori);
       return view('adminViews.kategoriproduk', compact('kategori'));
     
   }
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
