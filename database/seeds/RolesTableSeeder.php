<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
            [ 'name' => 'User'],
            [ 'name' => 'manager'],
            [ 'name' => 'Admin'],
            ['name' => 'Super Admin'],

        ]);
    }
}
