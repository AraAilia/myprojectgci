<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan plural dari nama model
    protected $table = 'kategori';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = ['kategori'];
}
