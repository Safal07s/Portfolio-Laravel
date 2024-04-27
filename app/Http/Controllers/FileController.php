<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files=new File;
        $files=$files->all();
        return view('admin.files.index',compact('files'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'img'=>'required',
        ]);
        $fileName=$request->id . "-" . time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'),$fileName);

        $files=new File;
        $files->title=$request->title;
        $files->description=$request->description;
        $files->img = $fileName;
        $files->save();
        return redirect()->route('files.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $files=new File;
        $files=$files->where('id',$id)->first();
        return view('admin.files.show',compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $files=new File;
        $files=$files->where('id',$id)->first();
        return view('admin.files.edit',compact('files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $files=new File;
        $files=$files->where('id',$id)->first();
        $files->title=$request->title;
        $files->description=$request->description;

        if ($request->img !=null){
            $fileName=$request->id . "-" . time() . '.' . $request->img->extension();
            File::delete(public_path('uploads/' . $files->img));
            $request->img->move(public_path('uploads'),$fileName);
            $files->where('id',$id)->update([
                'img' => $fileName,
            ]);
        }

        $files->update();
        return redirect()->route('files.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $files=new File;
        $files=$files->where('id',$id)->first();
        File::delete(public_path('uploads/' .  $files->img));
        $files->delete();
        return redirect()->route('files.index');
    }
}
