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
	Route::group(['middleware' => 'auth'], function(){
		Route::get('dat-hang2', ['as' => 'dathang', 'uses' => 'HomeController@datHangDn']);
	});

	Route::get('tim-kiem', 'HomeController@timkiem');
	Route::get('index', ['as'=>'trangchu', 'uses'=> 'HomeController@index']);
	Route::get('tintuc','HomeController@tintuc');
	Route::get('chitiettintuc/{id}','HomeController@chitiettintuc');
	Route::get('danhmuc/{id}', 'DanhMucController@danhmucsanpham');
	Route::get('chitiet/{id}', ['as' => 'chitiet', 'uses' => 'HomeController@chitiet']);
	// route giỏ hàng
	Route::get(	'gio-hang', 				['as'=> 'giohang', 'uses' => 'HomeController@giohang']);
 	Route::post('themvaogio/{id}', 			['as' => 'themvaogio', 'uses' => 'HomeController@themvaogio']);
 	Route::post('congvaogio/{id}/{size}', 	'HomeController@congvaogio');
 	Route::post('truvaogio/{id}/{size}', 	'HomeController@truvaogio');
 	Route::post('xoagiohang/{id}/{size}', 	'HomeController@xoatunggiohang');
 	Route::get('xoahetgiohang', 'HomeController@xoahetgiohang');
 	Route::get(	'dat-hang', 				'HomeController@datHang');
 	Route::post('dat-hang', 				'HomeController@postdatHang');
 	Route::get(	'datthanhcong', 			['as'=> 'datthanhcong' , 'uses' => 'HomeController@datthanhcong']);
 	// route lien he
 	Route::get(	'lien-he', 	['as' => 'getLienhe', 	'uses'=> 'HomeController@getlienhe']);
 	Route::post('lien-he', 	['as' => 'postLienhe', 	'uses'=> 'HomeController@postlienhe']);
});
Route::group(['namespace' => 'Auth'], function(){
	// dang ky dang nhap
	Route::get(	'dangky', 	['as' => 'dangky' , 	'uses' => 'AuthController@dangky']);
	Route::post('dangky', 	'AuthController@postDangky');
	Route::get(	'dangnhap', ['as' => 'dangnhap', 	'uses' => 'AuthController@getLogin']);
	Route::post('dangnhap', 'AuthController@postLogin');
	Route::get(	'dangxuat', ['as' => 'logout', 		'uses' => 'AuthController@getLogout']);
	Route::group(['middleware' => 'auth'], function(){

		Route::get('trangquanly' , 			['as' => 'trangquanly', 'uses' => 'AuthController@trangquanly']);

		Route::get('thongtintaikhoan/{id}', 'UserController@thongtintk');
		Route::get('taikhoan/edit/{id}', 	'UserController@suataikhoan');
		Route::post('taikhoan/edit/{id}', 	'UserController@postsuataikhoan');
	});
	
	Route::group(['middleware' => 'nhanvien'], function(){
		Route::get('allusers', 'UserController@allUsers');
		Route::get('suanguoidung/{id}','UserController@suanguoidung');
		Route::post('suanguoidung/{id}', 'UserController@suapassnguoidung');
		Route::get('deletenguoidung/{id}', 'UserController@deletenguoidung');

		Route::get('quanlysanpham', ['as' => 'quanlysanpham' , 'uses' => 'SanPhamController@index']);
		Route::get('themsanpham', 'SanPhamController@viewthemsanpham');
		Route::post('themsanpham', 'SanPhamController@themsanpham');
		Route::get('suasanpham/{id}', 'SanPhamController@suasanpham');
		Route::post('suasanpham/{id}', 'SanPhamController@postsuasanpham');
		Route::get('xoasanpham/{id}', 'SanPhamController@deletesanpham');

		Route::get('quanlydonhang', 'DonHangController@quanlydonhang');
		Route::get('xoadonhang/{id}/{cus_id}','DonHangController@xoadonhang');
		Route::get('chitietdonhang/{id}', 'DonHangController@chitietdonhang');


		Route::get('quanlydanhmuc', 'DanhMucController@quanlydanhmuc');
		Route::get('suadanhmuc/{id}', 'DanhMucController@suadanhmuc');
		Route::post('suadanhmuc/{id}', 'DanhMucController@postsuadanhmuc');
		Route::get('themdanhmuc', 'DanhMucController@themdanhmuc');
		Route::post('themdanhmuc', 'DanhMucController@postthemdanhmuc');
		Route::get('xoadanhmuc/{id}', 'DanhMucController@xoadanhmuc');

		Route::get('timkiem', 'SanPhamController@timkiem');
		Route::get('dathang', 'SanPhamController@datHang');

		Route::get('themtintuc', 'TinTucController@themtintuc');
		Route::post('themtintuc','TinTucController@postthemtintuc');
		Route::get('quanlytintuc','TinTucController@quanlytintuc');
		Route::get('suatintuc/{id}','TinTucController@suatintuc');
		Route::post('suatintuc/{id}', 'TinTucController@postsuatintuc');
		Route::get('deletetintuc/{id}', 'TinTucController@deletetintuc');
	});
	
});