<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LinkController extends Controller
{
  public function index(){

    $list = \App\Models\Link::get();
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

  public function searchByCompentence(){
    $currentUser = JWTAuth::parseToken()->authenticate();
    $currentPerson = \App\Models\Person::where('user_id', '=',$currentUser->id)->first();
    $items = \App\Models\Link::where('competence_id', '=', $currentPerson->competence_id)->select('title','description','url','imageUrl')->orderBy('title')->get();//->pluck('title');
    if ($items)
    {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "results"=>$items->toArray()
      ],200);
    }
    else {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "list"=> array()
      ],200);
    }


  }
}
