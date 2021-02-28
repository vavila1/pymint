<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    use HasFactory;
    protected $table = 'p_c_tm';
    public static function ingresosUsuario($id_usuario){
    	$ingresos = self::select('p_c_tm.id as id','productos.nombre as nombre_producto','clientes.nombre as nombre_cliente','p_c_tm.fecha as fecha','p_c_tm.cantidad as cantidad','p_c_tm.precio as precio','p_c_tm.descripcion as descripcion')
    			->where([
                    ['usuario.id','=',$id_usuario],
                    ['p_c_tm.id_tipo_movimiento','=',1],
                ])
    			->join('usuario','p_c_tm.id_usuario','usuario.id')
    			->join('productos','p_c_tm.id_producto','productos.id')
    			->join('clientes','p_c_tm.id_cliente','clientes.id')
    			->get();

    	$response = [];
    	foreach ($ingresos as $item) {
    		$id = $item->id;
    		$response[$id] = [
                'nombre_producto'=>$item->nombre_producto,
    			'nombre_cliente' => $item->nombre_cliente,
    			'fecha' =>$item->fecha,
    			'cantidad'=>$item->cantidad,
    			'precio'=>$item->precio,
    			'descripcion'=>$item->descripcion,
    		];
    	}
    	return $response;
    }

    public static function gastosUsuario($id_usuario){
        $ingresos = self::select('p_c_tm.id as id','productos.nombre as nombre_producto','proveedores.nombre as nombre_proveedor','p_c_tm.fecha as fecha','p_c_tm.cantidad as cantidad','p_c_tm.precio as precio','p_c_tm.descripcion as descripcion')
                ->where([
                    ['usuario.id','=',$id_usuario],
                    ['p_c_tm.id_tipo_movimiento','=',2],
                ])
                ->join('usuario','p_c_tm.id_usuario','usuario.id')
                ->join('productos','p_c_tm.id_producto','productos.id')
                ->join('proveedores','productos.id_proveedor','proveedores.id')
                ->get();

        $response = [];
        foreach ($ingresos as $item) {
            $id = $item->id;
            $response[$id] = [
                'nombre_producto'=>$item->nombre_producto,
                'nombre_proveedor' => $item->nombre_proveedor,
                'fecha' =>$item->fecha,
                'cantidad'=>$item->cantidad,
                'precio'=>$item->precio,
                'descripcion'=>$item->descripcion,
            ];
        }
        return $response;
    }
}
