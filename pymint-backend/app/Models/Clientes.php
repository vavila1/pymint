<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public static function clientesUsuario($id_usuario){
    	$proveedores = self::select('clientes.id as id','clientes.nombre as nombre','clientes.rfc as rfc','clientes.direccion as direccion','clientes.telefono as telefono')
    			->where('clientes.id_usuario','=',$id_usuario)
    			->join('usuario','clientes.id_usuario','usuario.id')
    			->get();

    	$response = [];
    	foreach ($proveedores as $item) {
    		$id = $item->id;
    		$response[$id] = [
                'id'=>$item->id,
    			'nombre' => $item->nombre,
    			'rfc' =>$item->rfc,
    			'direccion'=>$item->direccion,
    			'telefono'=>$item->telefono
    		];
    	}
    	return $response;
    }
}
