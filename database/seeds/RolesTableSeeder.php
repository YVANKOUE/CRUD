<?php

use App\Role;
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
        Role::truncate(); //suppression du contenu de la table role avec truncat
        // creation des différents roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'Superviseur']);
        Role::create(['name' => 'Utilisateur']);
    }
}
