<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $divisions = District::all();
        return view('divisions.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('districts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData= $request->validate([
            'name' => 'required|unique:districts|max:255',
            'division_id' => 'required',
        ]);
        $district =new District();
        $district->name = $request->name;
        $district->division_id = $request->division_id;
        $district->save();
        return redirect()->route('districts.index')
        ->with('success', 'District created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
        return view('districts.show', compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
       return view('districts.edit', compact('district'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|unique:divisions,name,' 
            . $district->id . ',id,country_id,' . $district->country_id,
            'country_id' => 'required|exists:countries,id'
        ]);

        $district->update($validatedData);

        return redirect()->route('districts.index')
        ->with('success', 'District updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        //
    
        $district->delete();

        return redirect()->route('districts.index')
        ->with('success', 'District deleted successfully.');

    }
}
