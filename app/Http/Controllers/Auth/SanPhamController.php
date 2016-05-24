<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Input;
use App\Http\Requests\SanPhamRequest;
use Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allproducts = Product::paginate(15);
        return view('backend.product.list', compact('allproducts'));
    }

    public function viewthemsanpham(){
        $category = Category::all();
        return view('backend.product.them', compact('category'));
    }
    public function themsanpham(SanPhamRequest $request){
        $product = new Product;
        $product->c_id = $request->sltParent;
        $product->pro_code = $request->pro_code;
        $product->pro_color = $request->pro_color;
        $product->pro_sizeS = $request->sizes;
        $product->pro_sizeL = $request->sizel;
        $product->pro_sizeM = $request->sizem;
        // dd($product->c_id); die();
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $product->pro_code = $request->pro_code;
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

        $product->save();
        return redirect('quanlysanpham')->with('message', 'Bạn đã thêm thành công');
    }
    public function suasanpham($id){
        $category = Category::all();
        $product = Product::where('pro_id', $id)->get()->first();
        $cate = Category::where('c_id', $product->c_id)->get()->first();
        return view('backend.product.sua', compact('product', 'category', 'cate'));
    }

    public function postsuasanpham(SanPhamRequest $request, $id){
        $product = Product::findOrFail($id);
        $product->c_id = $request->sltParent;
        $product->pro_color = $request->pro_color;
        $product->pro_sizeS = $request->sizes;
        $product->pro_sizeL = $request->sizel;
        $product->pro_sizeM = $request->sizem;
        // dd($product->c_id); die();
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $product->pro_code = $request->pro_code;
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
        $product->save();
        return redirect('quanlysanpham')->with('message', 'Bạn đã sửa thành công');
    }
    public function deletesanpham($id){
        $product = Product::where('pro_id', $id)->get()->first();

        unlink('public/frontend/images/' .  $product->pro_images);
        Product::where('pro_id', $id)->delete();
        return redirect('quanlysanpham')->with('message','Bạn đã xóa thành công');
    }
    
}
