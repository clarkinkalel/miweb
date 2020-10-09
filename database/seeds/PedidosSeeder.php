<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('pedidos')->truncate();

    	$REGISTROS = 50;
    	for ($i=1; $i <= $REGISTROS ; $i++)
    	DB::table('pedidos')->insert([
        'carga' => Str::random(50),
        'nombre_envio' => Str::random(20),
        'direccion_envio' => Str::random(20),
        'ciudad_envio' => Str::random(50),
        'codigo_postal_envio' => Str::random(50)

        ]);



    }
}
