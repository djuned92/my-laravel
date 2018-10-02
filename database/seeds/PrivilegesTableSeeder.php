<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('app_privilege')->insert(
	    	[
	    		[
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 1,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 2,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 3,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 4,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 5,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 6,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 1,
		    		'menu_id' 		=> 7,
		    		'can_create'	=> 1,
		    		'can_read'		=> 1,
		    		'can_update' 	=> 1,
		    		'can_delete' 	=> 1
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 1,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 2,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 3,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 4,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 5,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 6,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ],
		        [
		    		'role_id'		=> 2,
		    		'menu_id' 		=> 7,
		    		'can_create'	=> 0,
		    		'can_read'		=> 0,
		    		'can_update' 	=> 0,
		    		'can_delete' 	=> 0
		        ]
	        ]

    	);
    }
}
