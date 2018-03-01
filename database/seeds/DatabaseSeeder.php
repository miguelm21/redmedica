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

        DB::table('plans')->insert([
       'name'=>'Plan Basico',
       'applicable'=>'Medicos y Especialistas',
       'price'=>0,
       ]);

        DB::table('plans')->insert([
       'name'=>'Plan Mi Agenda',
       'applicable'=>'Medicos y Especialistas',
       'price'=>0,
       ]);


        DB::table('plans')->insert([
       'name'=>'Plan Profesional',
       'applicable'=>'Medicos y Especialistas',
       'price'=>0,
       ]);
       DB::table('plans')->insert([
         'name'=>'Plan Platino',
         'applicable'=>'Medicos y Especialistas',
         'price'=>0,
       ]);

       DB::table('plans')->insert([
      'name'=>'Plan Basico',
      'applicable'=>'Medicina Alternativa, Psicologos y Terapeutas',
      'price'=>0,
      ]);

       DB::table('plans')->insert([
         'name'=>'Plan Mi Agenda',
         'applicable'=>'Medicina Alternativa, Psicologos y Terapeutas',
         'price'=>0,
       ]);
       DB::table('plans')->insert([
      'name'=>'Plan Profesional',
      'applicable'=>'Medicina Alternativa, Psicologos y Terapeutas',
      'price'=>0,
      ]);


     DB::table('plans')->insert([
    'name'=>'Plan Platino',
    'applicable'=>'Medicina Alternativa, Psicologos y Terapeutas',
    'price'=>0,
    ]);


      DB::table('plans')->insert([
     'name'=>'Plan Basico',
     'applicable'=>'Nucleos Medicos',
     'price'=>0,
     ]);

      DB::table('plans')->insert([
     'name'=>'Plan Control',
     'applicable'=>'Nucleos Medicos',
     'price'=>0,
     ]);

         DB::table('plans')->insert([
        'name'=>'Plan Profesional-Plus',
        'applicable'=>'Nucleos Medicos',
        'price'=>0,
        ]);

        DB::table('plans')->insert([
       'name'=>'Plan Platino-Plus',
       'applicable'=>'Centros Medicos',
       'price'=>0,
       ]);

        DB::table('users')->insert([
       'name'=>'admin',
       'email'=>'admin@admin.com',
       'password'=>bcrypt('1234'),
       'role'=>'Administrador',
       ]);

       DB::table('roles')->insert([
      'name'=>'admin',
      'display_name'=>'Administrator',
      'description'=>'User is allowed to manage and edit other users'
      ]);

        DB::table('permissions')->insert([
       'name'=>'edit',
       'display_name'=>'Edit Users',
       'description'=>'edit existing users'
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
