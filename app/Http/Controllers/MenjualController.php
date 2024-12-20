<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('penjual.menjual');
    }
    
    public function isidata()
    {
        return view('penjual.isidata');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_toko' => 'required|string|max:255',
            'no_hp' => 'required|digits_between:10,15', // Validasi nomor HP
            'bank' => 'required|string|max:100',
            'no_rek' => 'required|numeric',
        ]);

        // Simpan data ke database
        $userDetail = new Penjual();
        $userDetail->user_id = Auth::id(); // Ambil user_id dari user yang sedang login
        $userDetai ->nama = $request->input('nama');
        $userDetail->toko = $request->input('toko');
        $userDetail->nomor_hp = $request->input('nomor_hp');
        $userDetail->bank = $request->input('bank');
        $userDetail->no_rekening = $request->input('no_rekening');
        $userDetail->save();

        // Return response
        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $userDetail
        ], 201);
    }
}
