<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings=new Setting;
        $settings=$settings->all();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'site_key'=>'required',
            'site_value'=>'required',
        ]);
        $settings=new Setting;
        $settings->site_key=$request->site_key;
        $settings->site_value=$request->site_value;

        $settings->save();
        return redirect()->route('settings.index');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $settings=new Setting;
        $settings= $settings->where('id',$id)->first();
        return view('admin.settings.show',compact('settings'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $settings=new Setting;
        $settings=$settings->where('id',$id)->first();
        return view('admin.settings.edit',compact('settings'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $settings=new Setting;
        $settings=$settings->where('id',$id)->first();
        // $settings->site_key=$request->site_key;
        $settings->site_value=$request->site_value;

        $settings->update();
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $settings=new Setting;
        $settings=$settings->where('id',$id)->first();
        $settings->delete();
        return redirect()->route('settings.index');
    }
}
