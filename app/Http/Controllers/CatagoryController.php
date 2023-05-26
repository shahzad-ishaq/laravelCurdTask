<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagorys = DB::table('catagories')->paginate(3);
       
        return view('catagory.index', ['catagorys' => $catagorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);        

        Catagory::create($request->all());

        return redirect()->route('catagory.index')
        ->with('success','Catagory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catagory  $Catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $Catagory)
    {
        return view('catagory.show',compact('Catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catagory  $Catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $Catagory)
    {
        return view('catagory.edit',compact('Catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catagory  $Catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $Catagory)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $Catagory->update($request->all());
  
        return redirect()->route('catagory.index')
                        ->with('success','Catagory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catagory  $Catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $Catagory)
    {
        $Catagory->delete();
  
        return redirect()->route('catagory.index')
                        ->with('success','Catagory deleted successfully');
    }
}
