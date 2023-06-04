<?php

namespace App\Http\Controllers;

use App\Models\Mytodo;
use Illuminate\Http\Request;

class Mytodocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $todo=Mytodo::all();
        return $todo; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $todo=new Mytodo();
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $todo=Mytodo::find($id);
        return view('edit',compact('todo'));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $todo= Mytodo::find($id);
        $todo->todo=$request->todo;
        $todo->save();
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $todo=Mytodo::find($id);
        $todo->delete();
        return redirect('/');
    }
}
