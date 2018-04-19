<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
        	'name'			=>	'List Users',
        	'slug'			=>	'users.index',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Show User',
        	'slug'			=>	'users.show',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Edit User',
        	'slug'			=>	'users.edit',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Delete User',
        	'slug'			=>	'users.destroy',
        	'description'	=>	'Description',
        ]);

        //Roles
        Permission::create([
        	'name'			=>	'List Roles',
        	'slug'			=>	'roles.index',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Create Role',
        	'slug'			=>	'roles.create',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Show Role',
        	'slug'			=>	'roles.show',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Edit Role',
        	'slug'			=>	'roles.edit',
        	'description'	=>	'Description',
        ]);
        Permission::create([
        	'name'			=>	'Delete Role',
        	'slug'			=>	'roles.destroy',
        	'description'	=>	'Description',
        ]);
    }
}
