<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('adminViews.index');
    }

    public function home()
    {
        return view ('home.index');
    }
}
