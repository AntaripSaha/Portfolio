<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;
use App\Category;

class PortfolioPagesController extends Controller
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
        $portfolios = Portfolio::All();


      return view ('backend.portfolio.list', compact('portfolios'));
    }

            // Category page
    public function catcreate()
    {
        $cat = Category::all();
       return view ('backend.portfolio.category', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view('backend.portfolio.create', compact('categories'));
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
            'title'=>'required|string',
            'sub_title'=>'required|string',
            'small_img'=>'required|image',
            'big_img'=>'required|image',
            'category'=>'required|string',

         ]);

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->sub_title = $request->sub_title;
        $portfolio->category = $request->category;


        $small_file = $request->file('small_img');
        Storage::putFile('public/img/gallery', $small_file);
        $portfolio->small_img =  "storage/img/gallery/".$small_file->hashName();


        $big_file = $request->file('big_img');
        Storage::putFile('public/img/gallery', $big_file);
        $portfolio->big_img =  "storage/img/gallery/".$big_file->hashName();



        $portfolio->save();
        
        return redirect()->route('admin.portfolio.create')->with('success', " New Portfolio Added Sucessfully");

    }

    //category store
    public function catstore(Request $request)
    {

        $this->validate($request, [
            'category'=>'required|string',
         ]);

        $category = new Category;
        $category->category = $request->category;
        $category->save();
       
        return redirect()->route('admin.portfolio.category')->with('success', " New  Data Added Sucessfully");
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
        $portfolio = Portfolio::Find($id);
        return view('backend.portfolio.edit', compact('portfolio'));
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

        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->title;
        $portfolio->sub_title = $request->sub_title;
        $portfolio->category = $request->category;


        if($request->file('small_img')){
        $small_file = $request->file('small_img');
        Storage::putFile('public/img/gallery', $small_file);
        $portfolio->small_img =  "storage/img/gallery/".$small_file->hashName();
        }


        if($request->file('big_img')){
            $big_file = $request->file('big_img');
            Storage::putFile('public/img/gallery', $big_file);
            $portfolio->big_img =  "storage/img/gallery/".$big_file->hashName();
        }

        $portfolio->save();
        
        return redirect()->route('admin.portfolio.list')->with('success', " Portfolio Updated Sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect()->route('admin.portfolio.list')->with('success', " Portfolio Deleted Sucessfully");
    }
    /**
     
     *Deletion of category

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function catdestroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.portfolio.category')->with('success', " Data Deleted Sucessfully");


    }
}





