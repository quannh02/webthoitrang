<?php

namespace App\Http\Controllers\frontend;
use App\Category;
use Cart;
use Input;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Mail;
//use Anam\Phpcart\Cart;
class HomeController extends Controller
{

    public function muahang(){
        $size = Input::get('size');
        //dd($size); die();
        $id = Input::get('id');
        //dd($id); die();
        $product = Product::where('pro_id',$id)->get()->first();
        Cart::add(array('id'=> $id, 'name' => $product->pro_name, 'qty'=> 1, 'price' => $product->pro_price, 'options' => array('size' => $size)));
        $total = Cart::count(false);
        $rowId = Cart::search(array('id' => $id, 'options' => array('size' => $size)));
        $ao = Cart::get($rowId[0]);
        $subtotal = $ao->subtotal;
        return json_encode(array('count' => $total, 'subtotal' => $subtotal));
    }
    
    public function giamhang(){
        $size = Input::get('size');
        $id = Input::get('id');
        $rowId = Cart::search(array('id' => $id, 'options' => array('size' => $size)));
        $ao = Cart::get($rowId[0]);
        $soluong = $ao->qty;
        $soluong -= 1;
        Cart::update($rowId[0], $soluong);
        $ao = Cart::get($rowId[0]);
        $subtotal = $ao->subtotal;
        $total = Cart::count(false);
        return json_encode(array('count' => $total, 'subtotal' => $subtotal));
        //dd($rowId); die();
    }
    
    public function giohang(){
         $cart = Cart::content();
         $count = Cart::count(false);
         //$data = Session::all();
         //dd($data); die();
         return view('frontend.pages.cart', compact('count', 'cart'));

    }
    
    public function index()
    {
        $aosominam = Product::where('c_id', 1)->orderBy('pro_id', 'desc')->take(6)->get();
        $aothunnam = Product::where('c_id', 2)->orderBy('pro_id', 'desc')->take(6)->get();
        return view('frontend.master', compact('aosominam', 'aothunnam'));
    }

    public function chitiet($id){
        $product = Product::where('pro_id', $id)->get()->first();
        return view('frontend.pages.chitiet', compact('product'));
    }  

    public function getlienhe(){
        return view('frontend.pages.lienhe');
    } 
    
    public function postlienhe(Request $request){
        $data = ['hoten' => $request->name, 'tinnhan' => $request->message];
        Mail::send('email.blanks', $data, function($message){
            $message->from('quannguyenetv@gmail.com','Bui Nguyên Ba');
            $message->to('quannh02@wru.vn', 'Connan Vu')->subject('Đây là mail test');
        });
        
    }
}
