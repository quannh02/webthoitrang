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
	Route::post('cart/{id}', 'HomeController@cart');
	Route::get('cartincrease/{product_id}', 'HomeController@increaseCart');
	Route::get('cartdecrease/{product_id}', 'HomeController@decreaseCart');
	Route::get('cartremove', 'HomeController@removeCart');
	Route::get('cart', 'HomeController@getCart');
	Route::get('chitiet/{id}', ['as' => 'chitiet', 'uses' => 'HomeController@chitiet']);
	Route::get('gio-hang', ['as'=> 'giohang', 'uses' => 'HomeController@giohang']);
 	Route::post('themvaogio/{id}', ['as' => 'themvaogio', 'uses' => 'HomeController@themvaogio']);
 	Route::post('congvaogio/{id}/{size}', 'HomeController@congvaogio');
 	Route::post('truvaogio/{id}/{size}', 'HomeController@truvaogio');
 	Route::post('xoagiohang/{id}/{size}', 'HomeController@xoatunggiohang');
 	Route::get('dat-hang', 'HomeController@datHang');
 	Route::post('dat-hang', 'HomeController@postdatHang');
 	Route::get('lien-he', ['as' => 'getLienhe', 'uses'=> 'HomeController@getlienhe']);
 	Route::post('lien-he', ['as' => 'postLienhe', 'uses'=> 'HomeController@postlienhe']);
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
	Route::group(['middleware' => 'nhanvien'], function(){
		Route::get('allusers', 'UserController@allUsers');
		Route::get('quanlysanpham', ['as'=> 'quanlysanpham' , 'uses' => 'SanPhamController@index']);
		Route::get('themsanpham', 'SanPhamController@viewthemsanpham');
		Route::post('themsanpham', 'SanPhamController@themsanpham');
		Route::get('suasanpham/{id}', 'SanPhamController@suasanpham');
		Route::post('suasanpham/{id}', 'SanPhamController@postsuasanpham');
		Route::post('deletesanpham', 'SanPhamController@deletesanpham');
	});
	
});