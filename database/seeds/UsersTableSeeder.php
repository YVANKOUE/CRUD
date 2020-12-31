

<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       DB::table('role_user')->truncate();


       $admin = user::create([
            'name' => 'admin;',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')      
            ]);

            $Superviseur = user::create([
            'name' => 'Superviseur;',
            'email' => 'Superviseur@Superviseur.com',
            'password' => Hash::make('password')      
            ]);



         $Utilisateur = user::create([
                'name' => 'Utilisateur;',
                'email' => 'Utilisateur@Utilisateur.com',
                'password' => Hash::make('password')      
                ]);

                $adminRole = Role::where('name','admin')->first();
                $SuperviseurRole = Role::where('name','Superviseur')->first();
                $UtilisateurRole = Role::where('name','Utilisateur')->first();
                // On attache les roles avec les différents utilisateur
                $admin->roles()->attach($adminRole);
                $Superviseur->roles()->attach($SuperviseurRole);
                $Utilisateur->roles()->attach($UtilisateurRole);
    }
}
