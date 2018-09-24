<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
	    	[
	    		[
		    		'role_id'	=> 1,
		            'username' 	=> 'admin',
		            'email' 	=> 'admin@gmail.com',
		            'password' 	=> bcrypt('secret'),
		        ],
		        [
		    		'role_id'	=> 2,
		            'username' 	=> 'user',
		            'email' 	=> 'user@gmail.com',
		            'password' 	=> bcrypt('secret'),
		        ]
	        ]
    	);
    }
}
