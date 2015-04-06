<?php

class HomeSliderTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('slider')->truncate();
		$Slider=array(
				
					array(
						'slider_image'			=>  'home-bg.jpg',
						'slider_heading'		=>	'Clean Blog dsgjsfc',
						'slider_sub_heading'	=>	'A Clean Blog Theme by Start Bootstrap.sdhkjfhkjfhk',
						'status'		=>	'1',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						)
			);
		  DB::table('slider')->insert($Slider);
	}

}
