<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamPagesController extends Controller
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

        $teams = Team::All();
      
       return view ('backend.team.list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'name'=>'required|string',
            'designation'=>'required|string',
            'twitter'=>'required|string',
            'facebook'=>'required|string',
            'instagram'=>'required|string',
            'linkedin'=>'required|string',
            'img'=>'required|image',
         ]);

        $team = new Team;
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->linkedin = $request->linkedin;

        $file1 = $request->file('img');
        Storage::putFile('public/img/team', $file1);
        $team->img =  "storage/img/team/".$file1->hashName();

        $team->save();
        
        return redirect()->route('admin.team.create')->with('success', " New Member Added Sucessfully");

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::Find($id);
        return view('backend.team.edit', compact('team'));
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
            'twitter'=>'required|string',
            'facebook'=>'required|string',
            'instagram'=>'required|string',
            'linkedin'=>'required|string',
           
         ]);

         $team = Team::find($id);
         $team->name = $request->name;
         $team->designation = $request->designation;
         $team->twitter = $request->twitter;
         $team->facebook = $request->facebook;
         $team->instagram = $request->instagram;
         $team->linkedin = $request->linkedin;


         if($request->file('img')){
            $file1 = $request->file('img');
            Storage::putFile('public/img/team', $file1);
            $team->img =  "storage/img/team/".$file1->hashName();
         }

     
 
        $team->save();
        
        return redirect()->route('admin.team.list')->with('success', " Member Updated Sucessfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::find($id);
        $teams->delete();

        return redirect()->route('admin.team.list')->with('success', " Member Deleted Sucessfully");
    }
}
