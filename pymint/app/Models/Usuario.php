<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Usuario extends Model
{
    use HasFactory;
    public static function registrarCuenta(Request $request){
    	$data = $request->all();
    	unset($data['_token']);

    	$response = Http::post('http://127.0.0.1:8001/api/cuentas',$data);
 
    	if($response == 'true'){
    		$response2 = Http::get('http://127.0.0.1:8001/api/cuentas/'.$request->input('correo'));
    		$request->session()->put('id',$response2['id']);
    		$request->session()->put('nombre',$response2['nombre']);
    		$request->session()->put('apellido',$response2['apellido']);
    		$request->session()->put('correo',$response2['correo']);
    		return 'true';
    	}else{
    		return 'false';
    	}
    }
    public static function inicioSesion(Request $request){
        $data = $request->all();
        unset($data['_token']);
        
        $response = Http::post('http://127.0.0.1:8001/api/login',$data);
        if($response == 'true'){
            $response2 = Http::get('http://127.0.0.1:8001/api/cuentas/'.$request->input('correo'));
            $request->session()->put('id',$response2['id']);
            $request->session()->put('nombre',$response2['nombre']);
            $request->session()->put('apellido',$response2['apellido']);
            $request->session()->put('correo',$response2['correo']);
            return 'true';
        }else{
            return 'false';
        }
    }
    public static function proveedoresUsuario(){
        $id = session('id');
        $data = Http::get('http://127.0.0.1:8001/api/cuentas/proveedores/'.$id);
        return $data->json();
    }
}
