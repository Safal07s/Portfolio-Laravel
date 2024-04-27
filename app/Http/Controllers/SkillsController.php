<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $skills=new Skills;
        $skills=$skills->all();
        return view('admin.skills.index',compact('skills'));
    
    }

    /**exted
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $skills=new Skills;
        $skills->title=$request->title;
        $skills->description=$request->description;

        $skills->save();
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $skills=new Skills;
        $skills=$skills->where('id',$id)->first();
        return view('admin.skills.show',compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $skills=new Skills;
        $skills=$skills->where('id',$id)->first();
        return view('admin.skills.edit',compact('skills'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills=new Skills;
        $skills=$skills->where('id',$id)->first();
        $skills->title=$request->title;   
        $skills->description=$request->description;   
        $skills->update();
        return redirect()->route('skills.index');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skills=new Skills;
        $skills=$skills->where('id',$id)->first();
        $skills->delete();
        return redirect()->route('skills.index');    

    }
}
