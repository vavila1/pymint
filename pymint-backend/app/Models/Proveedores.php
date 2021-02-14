<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    public static function proveedoresUsuario($id_usuario){
    	$proveedores = self::select('proveedores.id as id','proveedores.nombre as nombre','proveedores.rfc as rfc','proveedores.direccion as direccion','proveedores.telefono as telefono','proveedores.cuenta_bancaria as cuenta_bancaria')
    			->where('proveedores.id_usuario','=',$id_usuario)
    			->join('usuario','proveedores.id_usuario','usuario.id')
    			->get();

    	$response = [];
    	foreach ($proveedores as $item) {
    		$id = $item->id;
    		$response[$id] = [
    			'nombre' => $item->nombre,
    			'rfc' =>$item->rfc,
    			'direccion'=>$item->direccion,
    			'telefono'=>$item->telefono,
    			'cuenta_bancaria'=>$item->cuenta_bancaria,
    		];
    	}
    	return $response;


    }
}
