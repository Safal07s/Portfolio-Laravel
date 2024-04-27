<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facts = new Fact;
        $facts = $facts->all();
        return  view('admin.facts.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numbers' => 'required',
            'title' => 'required',
        ]);
        $facts= new Fact;
        $facts->numbers=$request->numbers;
        $facts->title=$request->title;
        $facts->save();
        return redirect()->route('facts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $facts = new Fact;
        $facts = $facts->where('id', $id)->first();
        return view('admin.facts.show', compact('facts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $facts = new Fact;
        $facts = $facts->where('id', $id)->first();
        return view('admin.facts.edit', compact('facts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $facts = new Fact;
        $facts = $facts->where('id', $id)->first();
        $facts->numbers= $request->numbers;
        $facts->title= $request->title;
        $facts->update();
        return redirect()->route('facts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facts = new Fact;
        $facts = $facts->where('id', $id)->first();
        $facts->delete();
        return redirect()->route('facts.index');
    }
}
