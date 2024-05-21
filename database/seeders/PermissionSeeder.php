<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'view-admin']);
        Permission::create(['name'=>'view-user']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'pengguna']);

        $role_admin = Role::findByName('admin');
        $role_admin->givePermissionTo('view-admin');

        $role_pengguna = Role::findByName('pengguna');
        $role_pengguna->givePermissionTo('view-user');


    }
}
