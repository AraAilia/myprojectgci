<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        return view('pembeli.index');
    }
    
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
   
}
