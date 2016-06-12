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
use App\TinTuc;
use Auth;
use App\User;
use App\Item;
use App\Customer;
use App\Product;
use App\Category;
use App\Order;
use App\DetailOrder;
use App\Http\Requests\GioHangRequest;
//use Anam\Phpcart\Cart;
class HomeController extends Controller
{

     public function index()
    {
        $cates = Category::all();
        $aosominam = Product::where('c_id', 1)->orderBy('pro_id', 'desc')->take(6)->get();
        $aothunnam = Product::where('c_id', 2)->orderBy('pro_id', 'desc')->take(6)->get();
        return view('frontend.pages.index', compact('aosominam', 'aothunnam', 'cates'));
    }

    public function chitiet($id){
        $cates = Category::all();
        $product = Product::where('pro_id', $id)->get()->first();
        $productcungloai = Product::whereNotIn('pro_id', [$id])->where('c_id', $product->c_id)->paginate(16);
        return view('frontend.pages.chitiet', compact('product', 'cates', 'productcungloai'));
    }  

    public function tongtien(){
        $tongtien = 0;
        if(Session::has('giohang')){
            
            foreach(Session::get('giohang') as $key => $value){
                $tongtien +=  $value['quantity'] * $value['price']; 
            }
        }
        return $tongtien;
    }
    public function giohang(){
        //dd(Session::get('giohang'));
        $cates = Category::all();
        $tongtien = $this->tongtien();
         return view('frontend.pages.cart', compact('cates',  'tongtien'));
    }
    
    public function themvaogio($id, GioHangRequest $request){
        $size = $request->sizechose;
        $product = Product::find($id);
        $index = -1;
            if(Session::has('giohang')) {
                foreach(Session::get('giohang') as $key => $value){
                    //dd($key); die();
                    if(($id == $value['id']) && ($size == $value['size'])) {
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
                if($quantity === 1){
                    Session::forget('giohang.'. $index);
                } else {
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
                }
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
        Session::forget('giohang');
        return redirect()->route('giohang');
    }

    public function datHang(){
        if(Session::has('giohang')){
         $cates = Category::all();
        return view('frontend.pages.dat', compact('cates'));
        } else {
            return redirect('gio-hang')->with('message', 'Bạn chưa có giỏ hàng nào để thanh toán');
        }
    }

    public function datHangDn(){
        $user = User::find(Auth::user()->user_id);
        $tongtien = $this->tongtien();
        return view('backend.order.order', compact('user', 'tongtien'));
    }
    public function postdatHang(DatHangRequest $request){
        $customer = Customer::create([
            'name' => $request->namenguoigui,
            'email' => $request->emailnguoigui,
            'address' => $request->addressnguoigui,
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
        Session::forget('giohang');
        return redirect()->route('trangchu')->with('message', 'Bạn đã đặt hàng thành công, chúng tôi sẽ liên hệ với bạn vào thời gian sớm nhất');
    }

    public function datthanhcong(){
        Session::flush('giohang');
        return view('frontend.pages.thongbao');
    }
   
    public function timkiem(){
        $cates = Category::all();
        $q = Input::get('q');
        $products = Product::where('pro_name', '=', trim($q))->orWhere('pro_code', '=',  trim($q))->get();
        return view('frontend.pages.timkiem', compact('products', 'cates'));
    }
    public function tintuc()
    {
        $cates = Category::all();
        $tintucs = TinTuc::all();
        return view('frontend.pages.tintuc', compact('tintucs','cates'));
    }
    public function chitiettintuc($id)
    {
       $cates = Category::all();
       $chitiettintuc = TinTuc::where('new_id', $id)->get()->first();
        return view('frontend.pages.chitiettintuc', compact('chitiettintuc','cates'));
    }
}
