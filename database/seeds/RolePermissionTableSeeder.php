<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role   =   Role::find(1);
        $role->assignPermission(1);
        $role->assignPermission(2);
        $role->assignPermission(3);
    }
}
