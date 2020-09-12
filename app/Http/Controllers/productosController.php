<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller

{
	/*public function _construct()
	{
		$this->middlerware('auth');
	}*/


    public function showName()
	
    {
    	return view('productos');
    }
}
