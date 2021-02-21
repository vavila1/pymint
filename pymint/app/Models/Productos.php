<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Productos extends Model
{
    use HasFactory;

    public static function registrarProductos($id_proveedor,Request $request){
    	$data = $request->all();
    	unset($data['_token']);
    	$response = Http::post(env('APPI2').'proveedores/'.$id_proveedor.'/productos/',$data);
    	if($response=='true'){
    		return 'true';
    	}else{
    		return 'false';
    	}
    }

    public static function borrarProducto($id_proveedor,$id_producto){
        $response = Http::delete(env('APPI2').'proveedores/'.$id_proveedor.'/productos/'.$id_producto);
        if($response=='true'){
            return 'true';
        }else{
            return 'false';
        }
    }
}
