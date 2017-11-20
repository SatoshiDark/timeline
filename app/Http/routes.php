<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'timelineController@gettimeline');
Route::get('/inicio', 'timelineController@inicio');
// ownerController for get and post the week topic
Route::resource('t0p1c','ownerController');
Route::get('t0p1c-get', 'ownerController@getDataList');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//Route::get('/timeline', function () {
//    $x = 0;
//    return 'hello';
////        return view('welcome');
//});
Route::get('timeline', 'timelineController@gettimeline');
Route::get('tago', 'timelineController@getTypeaheadTags');

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/home', function () {
        return redirect('welcome');
    });

});
