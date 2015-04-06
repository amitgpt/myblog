<?php

class UsersTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('users')->truncate();
		$Users=array(
				
					array(
						'first_name'			=>  'user',
						'last_name'			=>	'user',
						'email'				=>	'user@demoblog.com',
						'password'			=>	 Hash::make('123456'),
						'created_at'	    => new DateTime,
						'updated_at'	    => new DateTime,
						)
			);
		  DB::table('users')->insert($Users);
	}

}
