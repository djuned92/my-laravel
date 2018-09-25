<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application')->insert(
            [
               'name' 	=> 'Your Application',
               'company'=> 'Your Company'
	        ]
    	);
    }
}
