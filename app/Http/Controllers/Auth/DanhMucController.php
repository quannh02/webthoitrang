<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
class DanhMucController extends Controller
{
    
    public function quanlydanhmuc(){
        $allcates = Category::paginate(5);
        return view('backend.cate.list', compact('allcates'));
    }
    
    public function suadanhmuc($id){
        $cate = Category::where('c_id', $id)->get()->first();
        return view('backend.cate.sua', compact('cate'));
    }
    
    public function postsuadanhmuc($id){
        $cate = Category::findOrFail($id);
        $cate->c_name = Input::get('catename');
        $cate->save();
        return redirect('quanlydanhmuc')->with('message', 'Bạn đã sửa thành công');
    }

    public function themdanhmuc(){
        return view('backend.cate.them');
    }

    public function postthemdanhmuc(){
        $cate = new Category;
        $cate->c_name = Input::get('catename');
        $cate->save();
        return redirect('quanlydanhmuc')->with('message', 'Bạn đã thêm thành công');
    }

    public function xoadanhmuc($id){
        Category::where('c_id', $id)->delete();
        return redirect('quanlydanhmuc')->with('message', 'Bạn đã xóa thành công');
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
