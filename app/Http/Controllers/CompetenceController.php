<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetenceController extends Controller
{
  public function index(){

    $list = \App\Models\Competence::get();
    if ($list)
    {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "videos"=>$list->toArray()
      ],200);
    }
    else{
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "videos"=> array()
      ],200);

    }
  }
}
