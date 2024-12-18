<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan halaman cart
    public function index()
    {
        // Mengambil data cart dari session
        $cart = session()->get('cart', []);

        // Menghitung total harga
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Mengirimkan data cart dan total ke view
        return view('cart.index', compact('cart', 'total'));
    }

    // Menambahkan item ke cart
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id); // Mengambil produk berdasarkan ID

        // Ambil cart yang ada di session, atau buat array kosong jika belum ada
        $cart = session()->get('cart', []);

        // Cek apakah produk sudah ada di cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++; // Jika sudah ada, tambah jumlahnya
        } else {
            // Jika belum ada, tambahkan produk ke cart
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        // Simpan kembali cart ke session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    // Menghapus item dari cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        // Menghapus item dari cart
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Simpan kembali cart ke session
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }
}
