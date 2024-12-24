<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    
    public function index()
    {
        $kategoris = Kategori::all(); // Mengambil semua data kategori
        return view('pembeli.kategori', compact('kategoris')); // Mengirimkan data ke view
    }

    // Menampilkan form untuk membuat kategori baru
    public function create()
    {
        return view('kategori.create');
    }

    // Menyimpan kategori baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }
    public function kategori()
    {
        $kategoris = Kategori::all(); // Mengambil semua data kategori
        return view('kategori', compact('kategori'));
    }

    // Memperbarui kategori yang ada di database
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

    // Menghapus kategori dari database
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
   

}
