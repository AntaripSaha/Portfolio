<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;

class ServicePagesController extends Controller
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

        $services = Service::All();
      
       return view ('backend.service.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'name'=>'required|string',
            'import'=>'required|string',
         ]);

        $service = new Service;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->category = $request->category;
        $service->name = $request->name;
        $service->import = $request->import;

        $file1 = $request->file('img1');
        Storage::putFile('public/img/product', $file1);
        $service->img1 =  "storage/img/product/".$file1->hashName();

        $file2 = $request->file('img2');
        Storage::putFile('public/img/product', $file2);
        $service->img2 =  "storage/img/product/".$file2->hashName();

        $file3 = $request->file('img3');
        Storage::putFile('public/img/product', $file3);
        $service->img3 =  "storage/img/product/".$file3->hashName();


        $service->save();
        
        return redirect()->route('admin.service.create')->with('success', " New Service Added Sucessfully");

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
        $service = Service::Find($id);
        return view('backend.service.edit', compact('service'));
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
        $this->validate($request, [
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'name'=>'required|string',
            'import'=>'required|string',
         ]);

         $service = Service::find($id);
         $service->icon = $request->icon;
         $service->title = $request->title;
         $service->description = $request->description;
         $service->category = $request->category;
         $service->name = $request->name;
         $service->import = $request->import;


         if($request->file('img1')){
            $file1 = $request->file('img1');
            Storage::putFile('public/img/product', $file1);
            $service->img1 =  "storage/img/product/".$file1->hashName();
         }

         if($request->file('img2')){
            $file2 = $request->file('img2');
            Storage::putFile('public/img/product', $file2);
            $service->img2 =  "storage/img/product/".$file2->hashName();
         }
         if( $request->file('img3')){
            $file3 = $request->file('img3');
            Storage::putFile('public/img/product', $file3);
            $service->img3 =  "storage/img/product/".$file3->hashName();
         }
 
        $service->save();
        
        return redirect()->route('admin.service.list')->with('success', " Service Updated Sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('admin.service.list')->with('success', " Service Deleted Sucessfully");
    }
}
