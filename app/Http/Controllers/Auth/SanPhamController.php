<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Input;
use App\Http\Requests\SanPhamRequest;
use App\Http\Requests\ThemHangRequest;
use App\Functions;
use DB;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproducts = DB::table('product')->join('category', 'product.c_id', '=', 'category.c_id')->orderBy('pro_id', 'desc')->paginate(15);
        return view('backend.product.list', compact('allproducts'));
    }

    public function viewthemsanpham(){
        $category = Category::all();
        return view('backend.product.them', compact('category'));
    }
    public function themsanpham(ThemHangRequest $request){
        $product = new Product;
        $product->c_id = (int)$request->sltParent;
        //dd($product->c_id); die();
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $file = $request->file('pro_images');
        $destinationPath = base_path(). "/public/frontend/images/";

        $product->pro_images = $file->getClientOriginalName();
        $fileName = $destinationPath . $product->pro_images;
        //dd($file); die();
        if ($request->hasFile('pro_images')) {
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $product->pro_code = $request->pro_code;
        $product->pro_color = $request->pro_color;
        $product->pro_sizeS = $request->pro_sizeS;
        $product->pro_sizeL = $request->pro_sizeL;
        $product->pro_sizeM = $request->pro_sizeM;
        $product->save();
        return redirect()->route('quanlysanpham')->with('message', 'Bạn đã thêm thành công');
    }
    public function suasanpham($id){

        $product = Product::where('pro_id', $id)->first();
        $cate = Category::where('c_id', $product->c_id)->first();
        $category = Category::all();
        return view('backend.product.sua', compact('product', 'cate', 'category'));
    }

    public function postsuasanpham(SanPhamRequest $request, $id){
        $product = Product::findOrFail($id);
        //dd($product); die();
        $product->c_id = $request->sltParent;
        $product->pro_name = $request->pro_name;
        //dd($product->pro_name);
        $product->pro_price = $request->pro_price;
        $product->pro_color = $request->pro_color;
        $product->pro_code = $request->pro_code;
        $product->pro_sizeM = $request->pro_sizeM;
        $product->pro_sizeS = $request->pro_sizeS;
        $product->pro_sizeL = $request->pro_sizeL;
        if ($request->hasFile('pro_images')) {
        $file = $request->file('pro_images');
        //dd($file);
        $destinationPath = base_path(). "/public/frontend/images/";
        $functions = new Functions;
        $product->pro_images = $functions->stripUnicode($file->getClientOriginalName());
        $fileName = $destinationPath . $product->pro_images;
        //dd($fileName); die();
        
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $product->save();
        return redirect()->route('quanlysanpham')->with('message', 'Bạn đã sửa thành công');
    }
    public function deletesanpham($id){
        Product::where('pro_id', $id)->delete();
        return redirect()->route('quanlysanpham')->with('message', 'Bạn đã xóa thành công');
    }
    public function timkiem(){
        $q = Input::get('q');
        $products = Product::where('pro_name', 'LIKE', '%'. $q .'%')->orWhere('pro_code', 'LIKE', '%'. $q .'%')->get();
        return view('backend.product.search', compact('products'));
    }
    
}
