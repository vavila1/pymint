<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_Movimiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_movimiento')->insert([
            'nombre' => 'Ingreso'
        ]);
        DB::table('tipo_movimiento')->insert([
            'nombre' => 'Gasto'
        ]);
    }
}
