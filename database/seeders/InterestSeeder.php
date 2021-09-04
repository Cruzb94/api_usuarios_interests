<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interests')->insert([
            'name' => 'Jugar',
        ]);

        DB::table('interests')->insert([
            'name' => 'Comer',
        ]);

        DB::table('interests')->insert([
            'name' => 'Bailar',
        ]);

        DB::table('interests')->insert([
            'name' => 'Correr',
        ]);

        DB::table('interests')->insert([
            'name' => 'Estudiar',
        ]);

        DB::table('interests')->insert([
            'name' => 'Nadar',
        ]);

        DB::table('interests')->insert([
            'name' => 'Gimnasio',
        ]);
    }
}
