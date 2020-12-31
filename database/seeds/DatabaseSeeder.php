









<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //elements qui serons appellé lorsqu'on va faire un db:seed
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

