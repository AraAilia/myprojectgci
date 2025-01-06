<?php

namespace App\Models;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table='produk';
    protected $fillable = [
        'nama', 'kategori_id', 'deskripsi', 'harga', 'image_path', 'penjual_id'
    ];

     // Relasi dengan model Penjual
    public function penjual(){
        return $this->belongsTo(Penjual::class,'penjual_id');
    }
    
     // Relasi dengan model Kategori
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    
}
