<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'        => 'usuario',
            'slug'        => 'usuario',
            'description' => 'usuario de tipo alumno'
        ]);

        DB::table('roles')->insert([
            'name'        => 'administrativo',
            'slug'        => 'administrativo',
            'description' => 'usuario administrativo'
        ]);

        DB::table('roles')->insert([
            'name'        => 'medico',
            'slug'        => 'medico',
            'description' => 'usuario medico'
        ]);


    }
}
