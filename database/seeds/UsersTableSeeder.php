<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
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
       /* DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);*/
        User::create([
        	'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ]);

        //associate first user with admin role
        DB::table('role_user')->insert( ['role_id' => 1, 'user_id'=> 1] );


        //Adding 20 fake users for testing
        factory(App\User::class,20)->create();
    }
}
