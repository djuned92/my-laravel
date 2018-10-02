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
		    		'icon'	=> 'flaticon-settings'
		        ],
		        [
		    		'level'	=> 1,
		    		'parent_id' => 1,
		    		'menu'	=> 'Menu',
		    		'link'	=> null,
		    		'is_published' => 1,
		    		'menu_order' => 11000,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 1,
		    		'parent_id' => 1,
		    		'menu'	=> 'User',
		    		'link'	=> null,
		    		'is_published' => 1,
		    		'menu_order' => 12000,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 2,
		    		'menu'	=> 'Menu List',
		    		'link'	=> 'menus',
		    		'is_published' => 1,
		    		'menu_order' => 11100,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 2,
		    		'menu'	=> 'Access Control List',
		    		'link'	=> 'privileges',
		    		'is_published' => 1,
		    		'menu_order' => 11200,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 3,
		    		'menu'	=> 'User List',
		    		'link'	=> 'users',
		    		'is_published' => 1,
		    		'menu_order' => 12100,
		    		'icon'	=> null
		        ],
		        [
		    		'level'	=> 2,
		    		'parent_id' => 3,
		    		'menu'	=> 'User Role',
		    		'link'	=> 'roles',
		    		'is_published' => 1,
		    		'menu_order' => 12200,
		    		'icon'	=> null
		        ],   
	        ]

    	);
    }
}
