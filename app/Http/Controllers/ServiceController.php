<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=new Service;
        $services=$services->all();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',

        ]);
        $services=new Service;
        $services->icon=$request->icon;
        $services->title=$request->title;
        $services->description=$request->description;

        $services->save();
        return redirect()->route('services.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( string $id)
    {
    $services= new Service;
    $services=$services->where('id', $id)->first();
    return view('admin.services.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $services= new Service;
        $services=$services->where('id',$id)->first();
        return view('admin.services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services=new Service;
        $services=$services->where('id',$id)->first();
        $services->icon=$request->icon;
        $services->title=$request->title;
        $services->description=$request->description;
        $services->update();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        $services=new Service;
        $services=$services->where('id',$id)->first();
        $services->delete();
        return redirect()->route('services.index');
    }
}
