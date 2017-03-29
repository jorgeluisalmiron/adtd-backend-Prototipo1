<?php

use Illuminate\Http\Request;
use Illuminate\Http\Respnse;

use App\Http\Controllers\VideoController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\ApiAuthController;
use Tymon\JWTAuth\Exceptions;

use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::group(['middleware' => 'cors'], function(){
  Route::post('/auth_login', 'ApiAuthController@authenticate');
  Route::resource('/videos', 'VideoController');


});

Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('logout', 'ApiAuthController@logout');
    Route::get('/getUserInfo', 'ApiAuthController@getUserInfo');
    Route::get('/youtube/searchByCompetence', 'YoutubeController@searchByCompentence');
    Route::resource('/youtube', 'YoutubeController');
    Route::get('/link/searchByCompetence', 'LinkController@searchByCompentence');
    Route::resource('/link', 'LinkController');
    Route::resource('/competence', 'CompetenceController');
    Route::get('/getProfile', 'PersonController@getProfile');
    Route::put('/updateProfile', 'PersonController@updateProfile');

});
/*
Route::group(['prefix' => 'videos', 'middleware' => 'cors'], function(){

  try {

    $currentUser = JWTAuth::parseToken()->authenticate();

    Route::get("/","VideoController@index");
    Route::get("/{id}","VideoController@show");
    Route::post("/videos","VideoController@store");
    Route::put("/videos/{id}","VideoController@update");
    Route::delete("/videos/{id}","VideoController@destroy");
  }
  catch (Exception $e) {


    return response()->json([
      "msg"=>'0',
      "msg"=>'Authentication error'
    ],500);
  }
  catch (JWTException $e) {


    return response()->json([
      "msg"=>'0',
      "msg"=>'Authentication error'
    ],500);
  }
  catch (TokenInvalidException $e) {
    return response()->json([
      "msg"=>'0',
      "msg"=>'Invalid Token'
    ],500);
  }
  catch (TokenExpiredException $e) {
    return response()->json([
      "msg"=>'0',
      "msg"=>'The token has expired'
    ],500);
  }

  catch (TokenBlacklistedException $e) {
    return response()->json([
      "msg"=>'0',
      "msg"=>'The token is blacklisted'
    ],500);
  }
});

*/
