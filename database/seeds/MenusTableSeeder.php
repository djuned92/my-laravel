<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_menu')->insert(
	    	[
	    		[
		    		'level'	=> 0,
		    		'parent_id' => null,
		    		'menu'	=> 'Settings',
		    		'link'	=> null,
		    		'is_published' => 1,
		    		'menu_order' => 10000,
		    		'icon'	=> 'fa-gear'
		        ],
		        [
		    		'level'	=> 1,
		    		'parent_id' => 1,
		    		'menu'	=> 'Menu',
		    		'link'	=> 'menu',
		    		'is_published' => 1,
		    		'menu_order' => 11000,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 1,
		    		'menu'	=> 'User',
		    		'link'	=> null,
		    		'is_published' => 1,
		    		'menu_order' => 12100,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 1,
		    		'menu'	=> 'User List',
		    		'link'	=> null,
		    		'is_published' => 1,
		    		'menu_order' => 12110,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 1,
		    		'menu'	=> 'User Role',
		    		'link'	=> 'role',
		    		'is_published' => 1,
		    		'menu_order' => 12120,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 1,
		    		'menu'	=> 'Access Control List',
		    		'link'	=> 'privilege',
		    		'is_published' => 1,
		    		'menu_order' => 12130,
		    		'icon'	=> null
		        ]
	        ]

    	);
    }
}
