<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualContoller extends Controller
{
    public function index()
    {
        return view('penjual.index');
    }
    public function menjual()
    {
        return view('penjual.menjual');
    }
}
