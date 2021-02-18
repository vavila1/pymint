<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Proveedores extends Model
{
    use HasFactory;

    public static function registrarProveedor(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	$data['id_usuario'] = session('id');
    	$response = Http::post(env('APPI2').'proveedores',$data);
    	if($response=='true'){
    		return 'true';
    	}else{
    		return 'false';
    	}
    }

    public static function borrarProveedor($id_proveedor){
        $response = Http::delete(env('APPI2').'proveedores/'.$id_proveedor);
        if($response=='true'){
            return 'true';
        }else{
            return 'false';
        }
    }
}
