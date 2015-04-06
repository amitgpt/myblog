<?php

class AboutTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('about')->truncate();
		$Users=array(
				
					array(
						'about_image'	=>  'about-bg.jpg',
						'title'			=>	'About Me',
						'tag_line'		=>	'This is what I do.',
						'description'	=>	 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?',
						'status'		=>	'1',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						)
			);
		  DB::table('about')->insert($Users);
	}

}
