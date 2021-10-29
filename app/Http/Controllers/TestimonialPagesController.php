<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimonial;

class TestimonialPagesController extends Controller
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

        $testimonial = Testimonial::All();
      
       return view ('backend.testimonial.list', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
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
            'img'=>'required|image',
            'name'=>'required|string',
            'designation'=>'required|string',
            'quote'=>'required|string',

         ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->quote = $request->quote;


        $file = $request->file('img');
        Storage::putFile('public/img/testimonial', $file);
        $testimonial->img =  "storage/img/testimonial/".$file->hashName();

        $testimonial->save();
        
        return redirect()->route('admin.testimonial.create')->with('success', " New Testimonial Added Sucessfully");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::Find($id);
        return view('backend.testimonial.edit', compact('testimonial'));
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
            'name'=>'required|string',
            'designation'=>'required|string',
            'quote'=>'required|string',

         ]);

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->quote = $request->quote;

        if($request->file('img')){
        $file = $request->file('img');
        Storage::putFile('public/img/testimonial', $file);
        $testimonial->img =  "storage/img/testimonial/".$file->hashName();

        }


        $testimonial->save();
        
        return redirect()->route('admin.testimonial.list')->with('success', " New Testimonial Updated Sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonial.list')->with('success', " Testimonial Deleted Sucessfully");
    }
}
