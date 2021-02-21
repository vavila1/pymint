<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public static function productosProveedor($id_proveedor){
    	$proveedores = self::select('proveedores.nombre as nombre_proveedor','productos.id as id','productos.nombre as nombre')
    			->where('productos.id_proveedor','=',$id_proveedor)
    			->join('proveedores','productos.id_proveedor','proveedores.id')
    			->get();

    	$response = [];
    	foreach ($proveedores as $item) {
    		$id = $item->id;
    		$response[$id] = [
                'id'=>$item->id,
    			'nombre' => $item->nombre,
                'nombre_proveedor'=>$item->nombre_proveedor,
                'id_proveedor'=>$id_proveedor
    		];
    	}
    	return $response;
    }

    public static function registrarProducto($id_proveedor,Request $request){
        $producto = new Productos;
        $producto->id_proveedor = $id_proveedor;
        $producto->nombre = $request->input('nombre');
        $producto->save();
        if($producto->save()){
            return 'true';
        }else{
            return 'false';
        }
    }
}
