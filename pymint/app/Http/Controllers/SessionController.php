<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function cerrar_sesion(){
    	session()->flush();
    	return redirect('/');

    }
}
