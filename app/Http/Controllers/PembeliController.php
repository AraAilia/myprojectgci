<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
   
    public function mulaimenjual()
    {
        return view('pembeli.mulaimenjual');
    }
    public function kategori()
    {
        return view('pembeli.kategori');
    }
    public function unduh()
    {
        return view('pembeli.unduh');
    }
    public function index()
    {
        // Menampilkan dashboard pembeli
        return view('pembeli.index'); // Pastikan view ini ada di resources/views/pembeli/index.blade.php
    }
}
