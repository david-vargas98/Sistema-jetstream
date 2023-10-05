<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //Se define un método
    public function profile()
    {
        return view('profile');
    }
}
