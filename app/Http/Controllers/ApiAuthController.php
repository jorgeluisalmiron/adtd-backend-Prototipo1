<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Guard;

class ApiAuthController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
  }

  public function logout()
  {
     try {
       JWTAuth::invalidate();
       return response()->json([
         "msg"=>'Success'
       ],200);

     } catch (Exception $e) {
       return response()->json([
         "msg"=>'Internal Server Error'
       ],500);
     }



    // ...
  }

  public function getUserInfo(){
    $currentUser = JWTAuth::user();
    return response()->json([
      //  "msg"=>'0',
      "msg"=>'Success',
      "user"=>$currentUser->toArray()
    ],200);

  }
  public function authenticate(Request $request)
  {
    // grab credentials from the request
    $credentials = $request->only('email', 'password');

    $validator = Validator::make($credentials, [
      'email' => 'required',
      'password' => 'required',
    ]);
    if ( $validator->fails() ) {

      return response()->json(['error' =>$validator->errors()->getMessages()], 400);
    }

    try {
      // attempt to verify the credentials and create a token for the user
      if (! $token = JWTAuth::attempt($credentials)) {
        return response()->json(['error' => 'invalid_credentials'], 401);
      }
    } catch (JWTException $e) {
      // something went wrong whilst attempting to encode the token
      return response()->json(['error' => 'could_not_create_token'], 500);
    }

  //  $currentUser = JWTAuth::parseToken()->authenticate();
  //  $currentPerson = \App\Models\Person::where('user_id', '=',$currentUser->id)->first();
    // all good so return the token

    return response()->json(compact('token'));
  }
}
