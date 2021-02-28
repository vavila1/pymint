<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimientos;

class MovimientosController extends Controller
{
    //

    public function ingresos($id_usuario)
    {
    	$response = Movimientos::ingresosUsuario($id_usuario);
    	return $response;
    }

    public function gastos($id_usuario)
    {
    	$response = Movimientos::gastosUsuario($id_usuario);
    	return $response;

    }
}
