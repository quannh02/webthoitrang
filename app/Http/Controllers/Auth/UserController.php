<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsers(){
        $allusers = User::all();
        return view('backend.user.list', compact('allusers'));
    }
    public function thongtintk($id){
    	$user = User::find($id);
    	return view('backend.profile.thongtin', compact('user'));
    }
    public function suataikhoan($id){
        $user = User::find($id);
        return view('backend.profile.sua', compact('user'));
    }
    public function postsuataikhoan($id){
        $user = User::find($id);
        $user->address = Input::get('address');
        $user->sodienthoai = Input::get('sodienthoai');
        $user->save();
        return redirect('thongtintaikhoan/' . $user->user_id);
    }
}
