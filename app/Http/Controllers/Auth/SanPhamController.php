<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Input;
use App\Http\Requests\SanPhamRequest;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproducts = Product::all();
        return view('backend.product.list', compact('allproducts'));
    }

    public function viewthemsanpham(){
        $category = Category::all();
        return view('backend.product.them', compact('category'));
    }
    public function themsanpham(SanPhamRequest $request){
        $product = new Product;
        $product->c_id = $request->sltParent;
        // dd($product->c_id); die();
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $file = $request->file('pro_images');
        $destinationPath = base_path(). "/public/frontend/images/";

        // $function = new MyFunction;
        // $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
        $product->pro_images = $file->getClientOriginalName();
        $fileName = $destinationPath . $product->pro_images;
        //dd($file); die();
        if ($request->hasFile('pro_images')) {
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $product->pro_number = $request->pro_number;
        $product->pro_color = $request->pro_color;
        $product->pro_size = $request->pro_size;
        $product->save();
        return redirect()->route('quanlysanpham');
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
