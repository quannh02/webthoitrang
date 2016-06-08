<?php

namespace App\Http\Controllers\Auth;
use App\DonHang;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Order;
use App\DetailOrder;
use App\Customer;
class DonHangController extends Controller
{
    
    public function quanlydonhang(){
        $alldonhang = Order::paginate(10);
        return view('backend.donhang.donhang', compact('alldonhang'));
    }
    
    public function xoadonhang($id,$cus_id){
        Order::where('ord_id', $id)->delete();
        DetailOrder::where('order_id', $id)->delete();
        Customer::where('cus_id', $cus_id)->delete();

        return redirect('quanlydonhang')->with('message', 'Bạn đã xóa thành công');
    }
    public function chitietdonhang($id){
        $alldonhang = Order::paginate(10);
        $chitiet = DetailOrder::where('order_id',$id)->get();
        return view('backend.donhang.chitietdonhang', compact('alldonhang','chitiet'));
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
