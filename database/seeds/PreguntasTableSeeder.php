<?php

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
        	'id' => 1,
        	'pregunta1' => 'Flexibilidad ante los cambios',
        ]);
    }
}
