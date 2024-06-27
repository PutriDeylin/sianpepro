<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        Role::create(['name' => 'admin'])->givePermissionTo([
            'create post',
            'edit post',
            'delete post',
            'create user',
            'edit user',
            'delete user',
        ]);

        $roleadmin = Role::create(['name' => 'user'])->givePermissionTo([
            'create post',
            'edit post',
            'delete post',
        ]);

        $roleuser = Role::create(['name' => 'guest'])->givePermissionTo([
            'create post',
            
        ]);
    }
}
