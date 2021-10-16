<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'update_poll']);
        Permission::create(['name' => 'edit_poll']);
        Permission::create(['name' => 'delete_poll']);
        Permission::create(['name' => 'create_poll']);
        Permission::create(['name' => 'write_answer']);

        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'user'])->givePermissionTo(['write_answer']);
    }
}
