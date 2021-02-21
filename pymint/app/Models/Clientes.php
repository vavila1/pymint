<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Clientes extends Model
{
    use HasFactory;
    public static function borrarCliente($id_cliente){
    	$response = Http::delete(env('APPI2').'clientes/'.$id_cliente);
        if($response=='true'){
            return 'true';
        }else{
            return 'false';
        }

    }

    public static function registrarCliente(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	$data['id_usuario'] = session('id');
    	$response = Http::post(env('APPI2').'clientes',$data);
    	if($response=='true'){
    		return 'true';
    	}else{
    		return 'false';
    	}
    }
}
