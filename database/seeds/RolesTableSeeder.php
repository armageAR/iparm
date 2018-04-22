<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name'		=>	'Admin',
        	'slug'		=>	'admin',
        	'special'	=>	'all-access',
        ]);
        Role::create([
            'name'      => 'Suspended',
            'slug'      => 'no.access',
            'special'   => 'no-access'
        ]);
        Role::create([
            'name'      => 'Employer',
            'slug'      => 'employer'
        ]);
        Role::create([
            'name'      => 'Students',
            'slug'      => 'students'
        ]);
    }
}
