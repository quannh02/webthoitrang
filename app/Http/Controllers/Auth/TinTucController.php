<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TinTuc;
use Input;

class TinTucController extends Controller
{
    public function themtintuc(){
        return view('backend.news.them');
    }

    public function postthemtintuc()
    {
        $tintuc = new TinTuc;
        $tintuc->new_name   =   Input::get('new_name');
        $file = Input::file('new_images');
        $destinationPath = base_path(). "/public/frontend/images/";

        // $function = new MyFunction;
        // $url_hinhxe = $function->stripUnicode(basename($file->getClientOriginalName()));
        $tintuc->new_images = $file->getClientOriginalName();
        $fileName = $destinationPath . $tintuc->new_images;
        //dd($file); die();
        if (Input::hasFile('new_images')) {
            if ($file->isValid()) {
                $file->move($destinationPath, $fileName);
            }   
        }
        $tintuc->new_detail =   Input::get('new_detail');
        $tintuc->save();
        return redirect('quanlytintuc');
    }

    public function quanlytintuc(){
        $tintucs = TinTuc::paginate(15);
        return view('backend.news.list', compact('tintucs'));
    }


   
    public function suatintuc($id)
    {
        $tintuc = TinTuc::where('new_id', $id)->get()->first();
        return view('backend.news.sua',compact('tintuc'));
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
