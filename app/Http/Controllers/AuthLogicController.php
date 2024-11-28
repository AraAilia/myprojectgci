<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthLogicController extends Controller
{
    public function registerPage(){
        return view('authPage.register');
    }
}
