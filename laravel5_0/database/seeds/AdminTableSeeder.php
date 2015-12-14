<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{

	public function run()
	{
		\DB::table('users')->insert(array (
			'first_name'=> 'Luis',
			'last_name'	=> 'Berlanga',
			'email'		=> 'zioolx_lb93@hotmail.com',
			'password'	=> \Hash::make('secret'),
			'type'		=> 'Admin'
			));

		\DB::table('user_profiles')->insert(array (
			'user_id'	=> 1,
			'birthdate'	=> '1993/07/22'
			
			));
	}
	

}