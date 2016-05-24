<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests\DangKyRequest;
use Hash;
use App\Http\Requests\DangNhapRequest;
use Auth;
use Input;
use App\Category;

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
        $cates = Category::all();
        return view('frontend.pages.dangky', compact('cates'));
    }
    public function postDangKy(DangKyRequest $request){
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $request->name;
        $user->remember_token = Input::get('_token');
        $user->save();
        return redirect()->route('dangnhap');
    }
    public function getLogin(){
        $cates  = Category::all();
        return view('frontend.pages.dangnhap', compact('cates'));
    }
    public function postLogin(DangNhapRequest $request){
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // kiểm trả tên email và password có trong database hay khong
        if(Auth::attempt($user)){
            //Auth::login($user, true);
            return redirect()->route('trangquanly');
        } else {
            //echo 'fail'; die();
            return redirect()->route('dangnhap');
        }
    }
    
    protected $redirectPath = '/trangquanly';
    protected $redirectTo = '/trangquanly';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function trangquanly(){
        return view('backend.master');
    }
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
