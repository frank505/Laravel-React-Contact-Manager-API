<?php

use Illuminate\Http\Request;

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
Route::group([
    'prefix'=>'user',
    'namespace'=>'User',
],
function(){
    Route::post('register','AuthController@register');
    Route::post('login','AuthController@login');
   Route::post("contact/add","ContactController@addContacts");
   Route::get("contact/get-all/{token}/{pagination?}","ContactController@getPaginatedData");
    Route::post("contact/update/{id}","ContactController@editSingleData");
    Route::post("contact/delete/{id}","ContactController@deleteContacts");
    Route::get("contact/get-single/{id}","ContactController@getSingleData");
    Route::get("contact/search/{search}/{pagination?}","ContactController@searchData");
}
);
  