<?php

namespace App\Http\Controllers\frontend;
use App\Category;
use Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    var $categories;
    var $products;

    public function __construct(){
        $this->categories = Category::all(array('c_name'));
        $this->products   = Product::all(array('pro_id','pro_name', 'pro_price'));      
    }
    public function getCart(){
        $cart = Cart::content();
        return view('frontend.pages.cart', compact('cart'));
    }
    public function cart(Request $request) {
    // thêm sản phẩm
        if ($request->isMethod('post')) {
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->pro_name, 'qty' => 1, 'image' => $product->pro_images , 'price' => $product->pro_price));
        }
         
        $cart = Cart::content();
         
        return view('frontend.pages.cart', compact('cart'));
    }

    public function increaseCart($product_id){
        $rowId = Cart::search(array('id'=> $product_id));
        $item = Cart::get($rowId[0]);
        Cart::update($rowId[0], $item->qty + 1);
        
        $cart = Cart::content();
        return view('frontend.pages.cart', compact('cart'));
    }

    public function decreaseCart($product_id){
        $rowId = Cart::search(array('id'=> $product_id));
        $item = Cart::get($rowId[0]);
        Cart::update($rowId[0], $item->qty - 1);
        
        $cart = Cart::content();
        return view('frontend.pages.cart', compact('cart'));
    }

    public function removeCart($product_id){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aosominam = Product::where('c_id', 1)->orderBy('pro_id', 'desc')->take(6)->get();
        $aothunnam = Product::where('c_id', 2)->orderBy('pro_id', 'desc')->take(6)->get();
        return view('frontend.master', compact('aosominam', 'aothunnam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
