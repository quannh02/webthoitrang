<?php

namespace App\Http\Controllers\Auth;
use App\DonHang;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Order;
class DonHangController extends Controller
{
    
    public function quanlydonhang(){
        $alldonhang = Order::paginate(5);
        return view('backend.donhang.donhang', compact('alldonhang'));
    }
    
    public function xoadonhang($id){
        Category::where('ord_id', $id)->delete();
        return redirect('quanlydonhang')->with('message', 'Bạn đã xóa thành công');
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
