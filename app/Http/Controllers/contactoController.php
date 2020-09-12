<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
     public function showName()
    {
    	return view('contacto');
    }
}
