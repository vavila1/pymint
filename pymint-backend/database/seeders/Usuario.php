<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'nombre' => 'Victor Manuel',
            'apellido' => 'Avila Hernandez',
            'correo' => 'vavila1@me.com',
            'contraseña' => '123'
        ]);
    }
}
