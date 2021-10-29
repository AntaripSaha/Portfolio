<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Dash;


class DashBoardController extends Controller
{


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dash::first();
       
        return view('backend.dash', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'email'=>'required|string',

        // ]);

        $data = Dash::first();
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->logo_text = $request->logo_text;

        

        // if($request->file('logo_img')){
        //     $img_file = $request->file('logo_img');
        //     $img_file->storeAs('public/img', 'logo_img.' . $img_file->getClientOriginalExtension());
        //     $data->logo_img = 'storage/img/logo_img.' .  $img_file->getClientOriginalExtension();

        // }

        if($request->file('logo_img')){
            $file1 = $request->file('logo_img');
            Storage::putFile('public/img/logo', $file1);
            $data->logo_img =  "storage/img/logo/".$file1->hashName();
         }

        $data->save();
        
        return redirect()->route('admin')->with('success', " Data Updated Successfully");

    
       
    }

}



