<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');

        for ($i=0; $i < 20; $i++) { 
            DB::table('articulos')->insert([
                'titulo' => $faker->name(),
                'contenido' => $faker->text(500),
            ]);
        }
    }
}
