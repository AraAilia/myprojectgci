<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    protected $table='penjual';
    protected $fillable=['user_id','nama','toko','nomor_hp','bank','no_rekening'];

    public function produk()
    {
        return $this -> hasMany(Produk::class,'penjual_id');
    }
    
}
