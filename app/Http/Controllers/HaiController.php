<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $Request)
    {
      
        $result = "Hai World".$Request->nama;
        return $result;
    }
}