<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penjual;
use App\Models\User;
use App\Models\Produk;

class MenjualController extends Controller
{
    public function index()
    {
        return view('penjual.index');
    }
    public function ulasan()
    {
        return view('penjual.ulasan');
    }
    public function unggah()
    {
        return view('penjual.unggah');
    }
    public function datadiri()
    {
        return view('penjual.datadiri');
    }
    public function menjual()
    {
        $produk = Produk::paginate(10);

        return view('penjual.menjual', compact('produk'));
    }
    
    
    
   
    
}
