<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function plantilla(){
        return view('plantilla');
    }

    public function davinci (){
        return view('da vinci');
    }

    public function dali(){
        return view('dali');
    }

    public function frida(){
        return view('frida');
    }

    public function picasso(){
        return view('picasso');
    }

    public function vicent(){
        return view('vicent');
    }
}

