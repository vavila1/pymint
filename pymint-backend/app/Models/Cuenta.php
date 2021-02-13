<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cuenta extends Model
{
    use HasFactory;
    protected $table = 'usuario';

    public static function buscarCorreo($correo){
    	$user = self::select("*")
        ->where("usuario.correo",'=',$correo)
        ->get();
        $response = [];
        foreach ($user as $item){
            $id = $item->id;
            $response =[
                "id"=>$item->id,
                "nombre"=>$item->nombre,
                "apellido"=>$item->apellido,
                "correo"=>$item->correo,
            ];
        }return $response;
    }

    public static function buscarCorreoLogin($correo){
        $user = self::select("*")
        ->where("usuario.correo",'=',$correo)
        ->get();
        $response = [];
        foreach ($user as $item){
            $id = $item->id;
            $response =[
                "id"=>$item->id,
                "nombre"=>$item->nombre,
                "apellido"=>$item->apellido,
                "correo"=>$item->correo,
                'contra'=>$item->contraseña
            ];
        }return $response;
    }

    public static function registrarCuenta(Request $request){
    	$usuario = new Cuenta;

    	
    	$usuario->nombre = $request->input('nombre');
    	$usuario->apellido = $request->input('apellido');
    	$usuario->correo = $request->input('correo');
    	$usuario->contraseña = $request->input('contra');
    	$usuario->save();
    	if($usuario->save()){
    		return 'true';
    	}else{
    		return 'false';
    	}
    }
}
