<?php

class PostSliderTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('postheader')->truncate();
		$PostSlider=array(
				
					array(
						'post_slider_image'	=>	'post-bg.jpg',
						'status'			=>	'1',
						'created_at' 		=> new DateTime,
						'updated_at'   		=> new DateTime,
						)
			);
		  DB::table('postheader')->insert($PostSlider);
	}

}
