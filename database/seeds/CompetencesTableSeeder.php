<?php

use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $list = [[
         'title' => 'Nivel 1'
       ],
       [
         'title' => 'Nivel 2'
       ],
       [
         'title' => 'Nivel 3'
       ]];

       foreach ($list as $item) {
         \App\Models\Competence::create($item);
       }


     }
     
}
