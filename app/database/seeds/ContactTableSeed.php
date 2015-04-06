<?php

class ContactTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('contecslider')->truncate();
		$ConSlider=array(
				
					array(
						'contact_image'	=>  'contact-bg.jpg',
						'title'			=>	'Contact Me',
						'tag_line'		=>	'Have questions?',
						'description'	=>	 'Want to get in touch with me? Fill out the form below to send me a message and',
						'status'		=>	'1',
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						)
			);
		  DB::table('contecslider')->insert($ConSlider);
	}

}
