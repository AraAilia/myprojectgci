<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller

{
  

    public function registerPage(){
        return view('authPage.register');
    }

}
    



