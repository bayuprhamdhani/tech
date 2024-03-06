<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    public function Tes(Request $Request)
    {
      
        $hasil = "10 Menit bisa".$Request->nama;
        return $hasil;
    }
}