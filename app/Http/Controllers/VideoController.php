<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
  public function index(){

    $videos = \App\Models\Video::get();
    return response()->json([
      //  "msg"=>'0',
      "msg"=>'Success',
      "videos"=>$videos->toArray()
    ],200);
  }

  public function store(Request $request){

    $video =  new \App\Models\Video();
    $video->title = $request->title;
    $video->author = $request->author;
    $video->summary = $request->summary;
    $video->save();

    return response()->json([
      "msg"=>'Success',
      "id"=>$video->id
    ],200);
  }

  public function show($id){
    $videos = \App\Models\Video::find($id);
    if ($videos)
    {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "videos"=>$videos->toArray()
      ],200);
    }
    else {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "videos"=> array()
      ],200);
    }
  }


  public function update(Request $request, $id){

    $video =  \App\Models\Video::find($id);
    $video->title = $request->title;
    $video->author = $request->author;
    $video->summary = $request->summary;
    $video->save();

    return response()->json([
      "msg"=>'Success',
      "id"=>$video->id
    ],200);
  }

  public function destroy($id)
  {
    $video = \App\Models\Video::find($id);
    $video->delete();
    return response()->json([
      "msg"=>'Success',
      "id"=>$video->id
    ],200);
  }
}
