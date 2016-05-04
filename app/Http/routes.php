<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'frontend'], function(){
	Route::get('index', 'HomeController@index');
});
Route::get('dangky', ['as' => 'dangky' , 'uses' => 'Auth\AuthController@dangky']);
Route::post('dangky', 'Auth\AuthController@postDangky');
Route::get('dangnhap', ['as' => 'dangnhap', 'uses' => 'Auth\AuthController@dangnhap']);
Route::post('dangnhap', 'Auth\AuthController@postDangNhap'); 