<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  public function run()
  {
    $list = [[
      'title' => 'JAVA desde cero',
      'description' => 'Aprende programación JAVA desde 0 con este tutorial',
      'url' =>  'https://www.programarya.com/Cursos/Java',
      'imageUrl'=> 'https://i.blogs.es/e7b69c/java_logo/original.png',
      'competence_id' => 2
    ],
    [
      'title' => 'HTML 5 desde 0',
      'description' => 'Programacion web: HTML 5',
      'url' =>  'http://www.tutosytips.com/aprende-html5-desde-0/',
      'imageUrl'=> 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTRZu8f_ttYi-3ndQ9_4G0Ru2MUID8JYWZxfc-OBbj5zq2rspQZnw',
      'competence_id' => 3
    ]];

    foreach ($list as $item) {
      \App\Models\Link::create($item);
    }


  }
}
