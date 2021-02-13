<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class LoginController extends Controller
{
    //

    public function login(Request $request){
    	$user = Cuenta::buscarCorreoLogin($request->input('correo'));
    	if($user!=null){
    		if($request->input('contra')==$user['contra']){
    			return 'true';
    		}else{
    			return 'false';
    		}
    	}else{
    		return 'false';
    	}
    }
}
