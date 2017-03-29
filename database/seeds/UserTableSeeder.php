<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $users = [[
      'name' => 'Admin',
      'email' => 'sys@admin.com',
      'password' =>  bcrypt('123456')

    ],
    [
      'name' => 'Tony',
      'email' => 'tonystark@testmail.com',
      'password' =>  bcrypt('123456')

    ],

    [
      'name' => 'Bombita',
      'email' => 'bombitarodriguez@testmail.com',
      'password' =>  bcrypt('123456')

    ],

    [
      'name' => 'Robert',
      'email' => 'robertlangdon@testmail.com',
      'password' =>  bcrypt('123456')
    ],

    [
      'name' => 'Homero',
      'email' => 'homerosimpson@testmail.com',
      'password' =>  bcrypt('123456')

    ]
  ];

    foreach ($users as $user) {
      \App\User::create($user);
    }


  }
}
