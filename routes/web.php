<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
// test thử trang chủ
//
Route::get('/','TestController@index');
Route::get('home','HomeController@index');
//Route::get('demo','DemoController@index');

Route::get('login', function() {
    return view('login');
});
/* Route group thực hiện cách lệnh trong group */
//Route::group(['prefix' => 'login'], function() {
//
//    Route::get('/', function(){
//        return View::make('home');
//    });
//});