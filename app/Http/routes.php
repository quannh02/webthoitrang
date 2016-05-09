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
Route::group(['namespace' => 'Auth'], function(){
	Route::get('dangky', ['as' => 'dangky' , 'uses' => 'AuthController@dangky']);
	Route::post('dangky', 'AuthController@postDangky');
	Route::get('dangnhap', ['as' => 'dangnhap', 'uses' => 'AuthController@getLogin']);
	Route::post('dangnhap', 'AuthController@postLogin');
	Route::get('dangxuat', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
	Route::group(['middleware' => 'auth'], function(){
		Route::get('trangquanly' , ['as' => 'trangquanly', 'uses' => 'AuthController@trangquanly']);
	});
	Route::group(['middleware' => 'admin'], function(){
		Route::get('allusers', 'UserController@allUsers');
		Route::get('quanlysanpham', ['as'=> 'quanlysanpham' , 'uses' => 'SanPhamController@index']);
		Route::get('themsanpham', 'SanPhamController@viewthemsanpham');
		Route::post('themsanpham', 'SanPhamController@themsanpham');
	});
	
});