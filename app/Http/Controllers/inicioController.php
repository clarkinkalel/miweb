<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function showName()
    {
    	return view('bienvenido');
    }
}
