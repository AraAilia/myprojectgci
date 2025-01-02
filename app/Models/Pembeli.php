<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    public function pembeli()
{
    $dataPembeli = Pembeli::all(); 
    // Ambil semua data dari model Pembeli
    return view('pembeli.index', compact('dataPembeli'));
}
}
