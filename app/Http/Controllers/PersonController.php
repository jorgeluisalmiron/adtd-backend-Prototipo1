<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use \DateTime;

use App\Models\Person;

class PersonController extends Controller
{
  public function index(){

    $list = \App\Models\Person::get();
    if ($list)
    {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "results"=>$list->toArray()
      ],200);
    }
    else{
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "results"=> array()
      ],200);

    }
  }

  public function getProfile(){
    $currentUser = JWTAuth::parseToken()->authenticate();
    $currentPerson = \App\Models\Person::where('user_id', '=',$currentUser->id)->select('firstname','lastname','skype','phone_mobile','phone_home','address','birthdate')->first();

    if ($currentPerson)
    {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "profile"=>$currentPerson->toArray()
      ],200);
    }
    else {
      return response()->json([
        //  "msg"=>'0',
        "msg"=>'Success',
        "profile"=> array()
      ],200);
    }
  }

  public function updateProfile(Request $request){

    try {
      $currentUser = JWTAuth::parseToken()->authenticate();
      $item = \App\Models\Person::where('user_id', '=',$currentUser->id)->first();
      $item->firstname = $request->firstname;
      $item->lastname = $request->lastname;
      $item->phone_mobile = $request->phone_mobile;
      $item->phone_home = $request->phone_home;
      $item->address = $request->address;
      $item->skype = $request->skype;

      $date = new DateTime($request->birthdate);

      $mysql_date_string = $date->format('Y-m-d H:i:s');
      $item->birthdate = $mysql_date_string;
      $item->save();
      return response()->json([
        "msg"=>'Success'
      ],200);

    } catch (Exception $e) {
      return response()->json([
        "msg"=>'Internal Server Error'
      ],500);

    }



  }


}
