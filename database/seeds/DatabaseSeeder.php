<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BreedsTableSeeder::class);
        $this->call(CatsTableSeender::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeender::class);

    }
}
