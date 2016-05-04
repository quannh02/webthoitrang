<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\DangKyRequest;
use Hash;
use App\Http\Requests\DangNhapRequest;
use Auth;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function dangky(){
        return view('frontend.pages.dangky');
    }
    public function postDangKy(DangKyRequest $request){
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $request->name;
        $user->save();
        return redirect()->route('dangnhap');
    }
    public function dangnhap(){
        return view('frontend.pages.dangnhap');
    }
    public function postDangNhap(DangNhapRequest $request){
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // kiểm trả tên email và password có trong database hay khong
        if(Auth::attempt($user)){
            return redirect()->route('dangky');
        } else {
            return redirect()->route('dangnhap');
        }
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
