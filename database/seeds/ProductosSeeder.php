<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Bigint;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		DB::table('productos')->truncate();
		

    	$REGISTROS = 50;
    	for ($i=1; $i <= $REGISTROS ; $i++)
    	
       
    	DB::table('productos')->insert([
        
        'user_id' => 1,
        'comentarios' => Str::random(20),
        'nombre' => Str::random(20),
        'descipcion' => Str::random(50),
        'precio' => 1000000,
        'votos' => 1,
        'sunrise' => 7

        ]);
    }
}
