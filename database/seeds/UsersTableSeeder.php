<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Administrator;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //create the firs Admin
        Administrator::create();

        //create the user fo the admin
        User::create([
        	'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'userable_type' => 'admin',
            'userable_id' => 1,
        ]);

        //associate first user with admin role
        DB::table('role_user')->insert( ['role_id' => 1, 'user_id'=> 1] );


        //Adding 20 fake users for testing
        //factory(App\User::class,20)->create();
    }
}
