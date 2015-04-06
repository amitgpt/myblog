<?php

class BlogTableSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 //refresh users
		DB::table('blog')->truncate();
		$Blog=array(
				
					array(
						'title'			=>	'Man must explore, and this is exploration at its greatest ',
						'tag_line'		=>	'Problems look mighty small from 150 miles up ',
						'postedby'	=>	 'Tester',
						'blogcontant'	=>	 '<h4>Never in all their history have men been able truly to conceive of the world as one: </h4><p>a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman'.'s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>',
						'status'	=>	 1,
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'title'			=>	'I believe every human has a finite number of heartbeats. I dont intend to waste any of mine. ',
						'tag_line'		=>	'This is what I do.',
						'postedby'	=>	 'Tester',
						'blogcontant'	=>	 '<h4>The Final Frontier</h4><p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>',
						'status'	=>	 1,
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'title'			=>	'Man must explore, and this is exploration at its greatest ',
						'tag_line'		=>	'Problems look mighty small from 150 miles up ',
						'postedby'	=>	 'Tester',
						'blogcontant'	=>	 '<h4>Reaching for the Stars</h4><p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>',
						'status'	=>	 1,
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						),
					array(
						'title'			=>	'I believe every human has a finite number of heartbeats. I dont intend to waste any of mine. ',
						'tag_line'		=>	'This is what I do.',
						'postedby'	=>	 'Tester',
						'blogcontant'	=>	 '<h4>To go places and do things that have never been done before – that’s what living is all about.</h4><p>These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>',
						'status'	=>	 1,
						'created_at'    => new DateTime,
						'updated_at'    => new DateTime,
						)
					
			);
		  DB::table('blog')->insert($Blog);
	}

}
