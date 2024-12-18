<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        return view ('Pembeli.index');
    }
    public function kategori()
    {
        return view ('PembeliViews.kategori');
    }
    public function mulaimenjual()
    {
        return view ('PembeliViews.mulaimenjual');
    }
    public function keranjang()
    {
        return view ('PembeliViews.keranjang');
    }
    public function profile()
    {
        return view ('PembeliViews.profile');
    }
   

}
