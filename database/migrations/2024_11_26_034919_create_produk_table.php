<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penjual_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('image_path');
            $table->decimal('harga',total:8,places: 2);
            $table->foreign('penjual_id')->references('id')->on('penjual');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
