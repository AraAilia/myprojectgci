<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='produk';
    protected $fillable=
    ['penjual_id',
    'kategori_id',
    'nama',
    'deskripsi',
    'image_path',
    'harga'];

     // Relasi dengan model Penjual
    public function penjual(){
        return $this->belongsTo(Penjual::class,'penjual_id');
    }
    
     // Relasi dengan model Kategori
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
