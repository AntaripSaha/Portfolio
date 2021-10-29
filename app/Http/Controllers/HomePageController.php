<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Main;

class HomePageController extends Controller
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

    
    public function home()
    {
        $main = Main::first();
        
        return view('backend.home', compact('main'));
    }

 


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function homeupdate(Request $request)
    {
        // $this->validate($request, [
        //     'email'=>'required|string',

        // ]);

        $main = Main::first();
        $main->one = $request->one;
        $main->two = $request->two;
        $main->three = $request->three;



        if($request->file('img1')){
            $file1 = $request->file('img1');
            Storage::putFile('public/img/home', $file1);
            $main->img1 =  "storage/img/home/".$file1->hashName();
         }
         if($request->file('img2')){
            $file1 = $request->file('img2');
            Storage::putFile('public/img/home', $file1);
            $main->img2 =  "storage/img/home/".$file1->hashName();
         }
         if($request->file('img3')){
            $file1 = $request->file('img3');
            Storage::putFile('public/img/home', $file1);
            $main->img3 =  "storage/img/home/".$file1->hashName();
         }
         if($request->file('img4')){
            $file1 = $request->file('img4');
            Storage::putFile('public/img/home', $file1);
            $main->img4 =  "storage/img/home/".$file1->hashName();
         }
         if($request->file('img5')){
            $file1 = $request->file('img5');
            Storage::putFile('public/img/home', $file1);
            $main->img5 =  "storage/img/home/".$file1->hashName();
         }

 
        $main->save();
        return redirect()->route('admin.home')->with('success', " Data Updated Successfully");
        
       // return redirect()->route('backend.home')->with('success', " Data Updated Successfully");

    
       
    }


}
