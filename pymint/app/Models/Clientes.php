<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Clientes extends Model
{
    use HasFactory;
    public static function borrarCliente($id_cliente){
    	$response = Http::delete(env('APPI2').'clientes/'.$id_cliente);
        if($response=='true'){
            return 'true';
        }else{
            return 'false';
        }

    }
}
