<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function showName()
    {
    	return view('servicios');
    }
}
