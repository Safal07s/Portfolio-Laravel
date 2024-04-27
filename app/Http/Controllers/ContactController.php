<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=new Contact;
        $contacts=$contacts->all();
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);
        $contacts= new Contact;
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;

        $contacts->save();
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id)
    {
        $contacts=new Contact;
        $contacts=$contacts->where('id',$id)->first();
        return view('admin.contacts.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $contacts=new Contact;
        $contacts=$contacts->where('id',$id)->first();
        return view('admin.contacts.edit',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contacts=new Contact;
        $contacts=$contacts->where('id',$id)->first();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;

        $contacts->update();
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        $contacts=new Contact;
        $contacts=$contacts->where('id', $id);
        $contacts->delete();
        return redirect()->route('contacts.index');
    }
}
