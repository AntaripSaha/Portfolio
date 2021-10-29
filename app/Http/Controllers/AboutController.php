<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutController extends Controller
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
        $data = About::first();
       
        return view('backend.about', compact('data'));
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
        $this->validate($request, [
            'description'=>'required|string',

        ]);

        $data = About::first();
        $data->description = $request->description;

        // if($request->file('img')){
        //     $img_file = $request->file('img');
        //     $img_file->storeAs('public/img/about', 'img.'.$img_file->getClientOriginalExtension());
        //     $data->img = 'storage/img/about/img.'.$img_file->getClientOriginalExtension();

        // }

        if($request->file('img')){
            $file = $request->file('img');
            Storage::putFile('public/img/about', $file);
            $data->img =  "storage/img/about/".$file->hashName();
         }


        $data->save();
        
        return redirect()->route('admin.about')->with('success', " Data Updated Successfully");

    
       
    }

}
