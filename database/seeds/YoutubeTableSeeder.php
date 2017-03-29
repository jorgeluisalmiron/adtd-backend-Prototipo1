<?php

use Illuminate\Database\Seeder;

class YoutubeTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $youtube_list = [[
      'title' => 'GitHub',
      'description' => 'Curso GitHub',
      'url' =>  'https://www.youtube.com/watch?v=zH3I1DZNovk',
      'competence_id' => 1
    ],
    [
      'title' => 'Android Curso completo',
      'description' => '250 videos de Android en español. Excelente para aprender desde 0',
      'url' =>  'https://www.youtube.com/watch?v=3IvfKtgFVMc',
      'competence_id' => 1
    ],
    [
      'title' => 'Bootstrap',
      'description' => 'Learn Bootstrap',
      'url' =>  'https://www.youtube.com/watch?v=gqOEoUR5RHg',
      'competence_id' => 1
    ],
    [
      'title' => 'Genymotion',
      'description' => 'Instalación del emulador Genymotion',
      'url' =>  'https://www.youtube.com/watch?v=6fOCoJuc4Qs',
      'competence_id' => 1
    ],
    [
      'title' => 'Genymotion',
      'description' => 'Instalación del emulador Genymotion',
      'url' =>  'https://www.youtube.com/watch?v=6fOCoJuc4Qs',
      'competence_id' => 1
    ],
    [
      'title' => 'GIMP',
      'description' => 'Editor de imágenes freeware. Permite entre otras cosas crear y/o modificar iconos',
      'url' =>  'https://www.youtube.com/watch?v=Sqp-rVTBlRo',
      'competence_id' => 1
    ],
    [
      'title' => 'Spring Framework',
      'description' => 'Framework para JAVA, que entre otras cosas maneja inyeccion de dependencias, MVC, API Rest, seguridad de accesos',
      'url' =>  'https://www.youtube.com/watch?v=r4kqcSs4F7I',
      'competence_id' => 1
    ],
    [
      'title' => 'Hibernate Framework',
      'description' => 'Framework para JAVA para todo lo relacionado con interacción con bases de datos',
      'url' =>  'https://www.youtube.com/watch?v=u9DX9Z1zS2Y',
      'competence_id' => 1
    ],
    [
      'title' => 'Java Spring REST API AngularJS JSON',
      'description' => 'Interacción entre backend y front-end con API REST',
      'url' =>  'https://www.youtube.com/watch?v=9yIbiorr-M4',
      'competence_id' => 1
    ],
    [
      'title' => 'Android Material Design',
      'description' => 'Curso en español de Material Design de Google',
      'url' =>  'https://www.youtube.com/watch?v=eWBpw8zC-2M&list=PL9BJy6kATrm59SDplVv8RXQNUEZQTgJhY',
      'competence_id' => 1
    ]];

    foreach ($youtube_list as $item) {
      \App\Models\Youtube::create($item);
    }


  }
}
