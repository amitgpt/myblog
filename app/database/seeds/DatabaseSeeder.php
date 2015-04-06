<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		 $this->call('HomeSliderTableSeed');
		 $this->call('UsersTableSeed');
		 $this->call('AboutTableSeed');
		 $this->call('BlogTableSeed');
		 $this->call('ContactTableSeed');
		 $this->call('PostSliderTableSeed');
	}

}
