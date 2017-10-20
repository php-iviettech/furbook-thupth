<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name'=>'thupth',
            'email' => 'thupham240494@gmail.com',
            'password' => bcrypt('123456'),
            ],
        [
            'name'=>'thuongpth',
            'email' => 'thuongpham240494@gmail.com',
            'password' => bcrypt('123456'),
        ]
            ]);
    }
}
