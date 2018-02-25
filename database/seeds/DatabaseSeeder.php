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
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
       'name'=>'admin',
       'email'=>'admin@admin.com',
       'password'=>bcrypt('1234'),
       'role'=>'Administrador',
       ]);

       DB::table('specialties')->insert([
      'name'=>'Odontologia',
      ]);

        DB::table('specialties')->insert([
       'name'=>'Psiquiatria',
       ]);

       DB::table('specialties')->insert([
      'name'=>'Enfermeria',
      ]);

      DB::table('specialties')->insert([
     'name'=>'Cirugia',
     ]);

     DB::table('specialties')->insert([
    'name'=>'Laboratorio',
    ]);

  

    }
}
