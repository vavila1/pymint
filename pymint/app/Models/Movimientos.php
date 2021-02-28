<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Movimientos extends Model
{
    use HasFactory;
    public static function ingresosUsuario($id_usuario){
        $response = Http::get(env('APPI2').'movimientos/ingresos/'.$id_usuario);
        return $response->json();
    }

    public static function gastosUsuario($id_usuario){
        $response = Http::get(env('APPI2').'movimientos/gastos/'.$id_usuario);
        return $response->json();
    }
}
