<?php

namespace App\Http\Controllers\frontend;
use Cart;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\DatHangRequest;
use Session;
use Mail;

use App\Item;
use App\Customer;
use App\Product;
use App\Category;
use App\Order;
use App\DetailOrder;
//use Anam\Phpcart\Cart;
class HomeController extends Controller
{

    
    public function giohang(){
         return view('frontend.pages.cart');

    }
    
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
                    'size'      => $size,
                    'image'     => $product->pro_images
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
                        'size'      => $size,
                        'image'     => $product->pro_images
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
                    'size'      => $size,
                    'image'     => $product->pro_images
                    );
                Session::push('giohang', $item);
            }   

            //dd(Session::get('giohang'));
           // $count = count(Session::get('giohang'));
            return redirect()->route('giohang');
    }    

    public function congvaogio($id, $size){
        $product = Product::find($id);
        foreach(Session::get('giohang') as $key => $value){
                    //dd($key); die();
                    if(($id == Session::get('giohang')[$key]['id']) && ($size == Session::get('giohang')[$key]['size'])) {
                        $index = $key;
                        break;
                    }
                }
                $quantity = Session::get('giohang')[$index]['quantity'];
                    
                $item = array(
                        'id' => $id,
                        'name' => $product->pro_name,
                        'quantity' => $quantity + 1,
                        'price'    => $product->pro_price,
                        'size'      => $size,
                        'image'     => $product->pro_images
                        );
                    Session::push('giohang', $item);
                    Session::forget('giohang.' . $index);
                    //dd(Session::get('giohang')[$index]['quantity']++);
                    //echo 'a';
                    //dd(Session::get('giohang')[$index]); die();
                    return redirect()->route('giohang');
    }      

    public function truvaogio($id, $size){
        $product = Product::find($id);
        foreach(Session::get('giohang') as $key => $value){
                    //dd($key); die();
                    if(($id == Session::get('giohang')[$key]['id']) && ($size == Session::get('giohang')[$key]['size'])) {
                        $index = $key;
                        break;
                    }
                }
                $quantity = Session::get('giohang')[$index]['quantity'];
                $item = array(
                        'id' => $id,
                        'name' => $product->pro_name,
                        'quantity' => $quantity - 1,
                        'price'    => $product->pro_price,
                        'size'      => $size,
                        'image'     => $product->pro_images
                        );
                    Session::push('giohang', $item);
                    Session::forget('giohang.' . $index);
                    //dd(Session::get('giohang')[$index]['quantity']++);
                    //echo 'a';
                    //dd(Session::get('giohang')[$index]); die();
                    return redirect()->route('giohang');
    }      

    public function xoatunggiohang($id, $size){
        foreach(Session::get('giohang') as $key => $value){
                    //dd($key); die();
                    if(($id == Session::get('giohang')[$key]['id']) && ($size == Session::get('giohang')[$key]['size'])) {
                        $index = $key;
                        break;
                    }
                }
            Session::forget('giohang.'. $index);
            return redirect()->route('giohang');
    }
    public function xoahetgiohang(){
        Session::flush('giohang');
        return redirect()->route('giohang');
    }

    public function datHang(){
        return view('frontend.pages.dat');
    }

    public function postdatHang(DatHangRequest $request){
        $customer = Customer::create([
            'name' => $request->namenguoigui,
            'email' => $request->emailnguoigui,
            'address' => $request->sdtnguoigui,
            'sodienthoai' => $request->sdtnguoigui
            ]);
        $order = new Order([
            'ord_name' => $request->namenguoinhan,
            'ord_phone' => $request->sdtnguoinhan,
            'ord_address' =>$request->addressnguoinhan
            ]);
        $customer->order()->save($order);
        foreach(Session::get('giohang') as $key => $value){
            $orderdetail = new DetailOrder([
                'pro_id' => $value['id'],
                'det_number' => $value['quantity'],
                'det_price' => $value['price'],
                'det_size' => $value['size']
            ]);
            $order->detailorder()->save($orderdetail);
        }
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
