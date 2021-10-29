<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;

class DescriptionController extends Controller
{
    public function index(){

        $data =  Description::First(); 
        return view('backend.description', compact('data'));
    }
    public function update(Request $request){
       
        $data =  Description::first(); 
        $data->service_description = $request->service_description;
        $data->img_description = $request->img_description;
        $data->testimonial_description = $request->testimonial_description;
        $data->call_description = $request->call_description;
        $data->team_description = $request->team_description;
        $data->contact_description = $request->contact_description;
        $data->map = $request->map;

        $data->save();

        return redirect()->back()->with('success', ' Data Updated Successfully');
    }
}
