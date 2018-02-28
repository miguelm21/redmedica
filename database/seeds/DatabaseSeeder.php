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

       DB::table('cities')->insert([
      'name'=>'Guanare',
      ]);
        DB::table('cities')->insert([
       'name'=>'Acarigua',
       ]);

       DB::table('cities')->insert([
      'name'=>'Barquisimeto',
      ]);

      DB::table('permissions')->insert([
     'name'=>'Editar',
     'description'=>'Editar usuarios y planes',
     ]);

     DB::table('permissions')->insert([
    'name'=>'Eliminar',
    'description'=>'Eliminar usuarios y planes',
  ]);

    }
}
