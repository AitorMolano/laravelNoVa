<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ES_es');

        for ($i=0; $i < 3; $i++) { 
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail(),
                'email_verified_at'=>now(),
                'password'=>$faker->password(),
                'remember_token'=>Str::random(10),
            ]);
        }
    }
}
