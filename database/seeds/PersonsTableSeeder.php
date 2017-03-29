<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $list = [[
        'firstname' => 'Tony',
        'lastname' => 'Stark',
        'type'=> 'Alumno',
        'skype' => 'ironman22',
        'phone_mobile' => '15000000',
        'phone_home' => '15000000',
        'address' => 'Malibu Beach',
        'birthdate' => '1970-01-01',
        'competence_id' => 1,
        'user_id'  => 2
      ],
      [
        'firstname' => 'Bombita',
        'lastname' => 'Rodriguez',
        'type'=> 'Alumno',
        'skype' => 'coctel_explosivo@outlook.com',
        'phone_mobile' => '15000001',
        'phone_home' => '15000001',
        'address' => 'Av Belgrano 222 CABA',
        'birthdate' => '1970-02-02',
        'competence_id' => 2,
        'user_id'  => 3
      ],
      [
        'firstname' => 'Robert',
        'lastname' => 'Langdon',
        'type'=> 'Alumno',
        'skype' => 'elrobertitodetexas',
        'phone_mobile' => '15000003',
        'phone_home' => '15000003',
        'address' => 'Av 1 222 Dallas Texas',
        'birthdate' => '1970-03-03',
        'competence_id' => 2,
        'user_id'  => 4
      ],
      [
        'firstname' => 'Homero',
        'lastname' => 'Simposon',
        'type'=> 'Alumno',
        'skype' => 'homer33',
        'phone_mobile' => '15000004',
        'phone_home' => '15000004',
        'address' => 'Springfield',
        'birthdate' => '1970-04-04',
        'competence_id' => 1,
        'user_id'  => 5
      ],

      [
        'firstname' => 'System',
        'lastname' => 'Administrator',
        'type'=> 'Administrador',
        'skype' => '',
        'phone_mobile' => '',
        'phone_home' => '',
        'address' => '',
        'birthdate' => '1900-01-01',
        'competence_id' => 0,
        'user_id'  => 1
      ]
    ];

      foreach ($list as $item) {
        \App\Models\Person::create($item);
      }
    }
}
