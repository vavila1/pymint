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
    			->where([
                    ['productos.id_proveedor','=',$id_proveedor],
                    ['productos.estatus','=',1],
                ])
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
        $producto->estatus = 1;
        $producto->save();
        if($producto->save()){
            return 'true';
        }else{
            return 'false';
        }
    }

    public static function borrarProducto($id_proveedor,$id_producto){
        $producto = Productos::find($id_producto);
        if($producto!=null){
            $producto->estatus = 2;
            $producto->save();
            if($producto->save()){
                return 'true';
            }else{
                return 'false';
            }
        }else{
            return 'false';
        }
    }

    public static function borrarProductos($id_proveedor){
        $productos = self::where([
                    ['productos.id_proveedor','=',$id_proveedor],
                    ['productos.estatus','=',1],
                ])
                ->update(['estatus'=>2]);
        return $productos;
    }

    public static function proveedorProducto($id_producto){
        $proveedores = self::select('proveedores.nombre as nombre_proveedor','productos.id_proveedor as id_proveedor')
                ->where([
                    ['productos.id','=',$id_producto],
                    ['productos.estatus','=',1],
                ])
                ->join('proveedores','productos.id_proveedor','proveedores.id')
                ->get();

        $response = [];
        foreach ($proveedores as $item) {
            $id = $item->id;
            $response= [
                'nombre_proveedor'=>$item->nombre_proveedor,
                'id_proveedor'=>$item->id_proveedor
            ];
        }
        return $response;
    }
}
