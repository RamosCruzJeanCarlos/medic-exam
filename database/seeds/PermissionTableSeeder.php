<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name'        => 'reservar_cita',
            'slug'        => 'reservar_cita',
            'description' => 'reserva una cita como alumno'
        ]);

        DB::table('permissions')->insert([
            'name'        => 'eliminar_cita',
            'slug'        => 'eliminar_cita',
            'description' => 'elimina una cita como alumni'
        ]);

        DB::table('permissions')->insert([
            'name'        => 'editar_cita',
            'slug'        => 'editar_cita',
            'description' => 'edita una cita como alumno'
        ]);

    }
}
