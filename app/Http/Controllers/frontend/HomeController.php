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
use App\Item;
//use Anam\Phpcart\Cart;
class HomeController extends Controller
{
 
    public function themvaogio($id){
        $size = Input::get('sizechose');
        $product = Product::find($id);
        $index = -1;
            if(Session::has('giohang')) {
                foreach(Session::get('giohang') as $key => $value){
                    //dd($key); die();
                    if(($id == Session::get('giohang')[$key]['id']) && ($size == Session::get('giohang')[$key]['size'])) {
                        $index = $key;
                        break;
                    }
                }
                if($index === -1) {
                    $item = array(
                    'id' => $id,
                    'name' => $product->pro_name,
                    'quantity' => 1,
                    'price'    => $product->pro_price,
                    'size'      => $size
                    );
                    //dd($item);
                    Session::push('giohang', $item);
                } else {
                    $quantity = Session::get('giohang')[$index]['quantity'];
                    
                    $item = array(
                        'id' => $id,
                        'name' => $product->pro_name,
                        'quantity' => $quantity + 1,
                        'price'    => $product->pro_price,
                        'size'      => $size
                        );
                    Session::push('giohang', $item);
                    Session::forget('giohang.' . $index);
                    //dd(Session::get('giohang')[$index]['quantity']++);
                    //echo 'a';
                    //dd(Session::get('giohang')[$index]); die();
                }      
            } else {
                $item = array(
                    'id' => $id,
                    'name' => $product->pro_name,
                    'quantity' => 1,
                    'price'    => $product->pro_price,
                    'size'      => $size
                    );
                Session::push('giohang', $item);
            }   

            //dd(Session::get('giohang'));
            // $count = count(Session::get('giohang'));
            return redirect()->route('giohang');
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
