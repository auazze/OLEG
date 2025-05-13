<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $user  = Role::create(['name' => 'user']);

        $permEdit = Permission::create(['name' => 'edit articles']);
        $permView = Permission::create(['name' => 'view articles']);

        $admin->givePermissionTo([$permEdit, $permView]);
        $user->givePermissionTo($permView);
    }
}
