<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjual extends Model
{
    protected $table='penjual';
    use HasFactory;

    protected $fillable = [
        'nama',
        'toko',
        'nomor_hp',
        'bank',
        'no_rekening',
        'user_id',
    ];

}
