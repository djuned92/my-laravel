<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_profile')->insert(
	    	[
	    		[
		    		'user_id'	=> 1,
		    		'fullname'	=> 'Ahmad Djunaedi',
		    		'address'	=> 'Bekasi, Planet Namex',
		    		'gender'	=> 'L'
		        ],
		        [
		    		'user_id'	=> 2,
		    		'fullname' 	=> 'Widya Ariyani',
		    		'address'	=> 'Kota Tangerang, Indonesia',
		    		'gender'	=> 'P'
		        ]
	        ]

    	);
    }
}
