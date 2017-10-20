<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('breeds')->insert([
            ['id' =>1, 'name' => 'Domestic'],
            ['id' =>2, 'name' => 'perety'],
            ['id' =>3, 'name' => 'Simadsr'],
            ['id' =>4, 'name' => 'Abyewr'],

        ]);
    }
}
