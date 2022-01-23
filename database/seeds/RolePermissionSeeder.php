<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission list as array 
       $roleAdmin = Role::create(['name' => 'admin']);
       $roleSuperAdmin = Role::create(['name' => 'superadmin']);
       $roleEdit = Role::create(['name' => 'edit']);
       $roleUser = Role::create(['name' => 'user']);
        $permissions = [

            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',

            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            'profile.create',
            'profile.view',
            'profile.edit',
            'profile.delete',
            'profile.approve',

        ];
        for($i = 0; $i < count($permissions); $i++){
            $permission = Permission::create(['name' => $permissions[$i]]);

        $roleSuperAdmin->givePermissionTo($permission);
        $permission->assignRole($roleSuperAdmin);


        }

       
    }
}
