<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_role')->insert(
	    	[
                [
	               'name' 	=> 'Admin'
    	        ],
    	        [
    	        	'name'	=> 'User'
    	        ]
            ]
    	);
    }
}
