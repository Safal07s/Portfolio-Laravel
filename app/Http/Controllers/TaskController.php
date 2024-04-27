<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=new Task;
        $tasks=$tasks->all();
        return view('admin.tasks.index',compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tasks.create');
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
        $tasks=new Task;
        $tasks->title=$request->title;
        $tasks->description=$request->description;

        $tasks->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $tasks=new Task;
        $tasks=$tasks->where('id',$id)->first();
        return view('admin.tasks.show',compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks=new Task;
        $tasks=$tasks->where('id',$id)->first();
        return view('admin.tasks.edit',compact('tasks'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tasks=new Task;
        $tasks=$tasks->where('id',$id)->first();
        $tasks->title=$request->title;   
        $tasks->description=$request->description;   
        $tasks->update();
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $tasks=new Task;
        $tasks=$tasks->where('id',$id)->first();
        $tasks->delete();
        return redirect()->route('tasks.index');    }
}
