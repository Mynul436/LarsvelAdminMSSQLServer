<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware(function ($request, $next) {
             if (auth()->user()->role !== 'admin') {
                 abort(403, 'Unauthorized action.');
             }
             return $next($request);
         });
     }
    public function index()
    {
        //

        $divisions = Division::all();
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

        return view('divisions.create');
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
        $validatedData = $request->validate([
            'name' => 'required|unique:divisions|max:255',
        ]);

        $division = new Division;
        $division->name = $request->name;
        $division->user_id = auth()->user()->id;
        $division->save();
        return redirect()->route('divisions.index')
        ->with('success', 'Division created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
        return view('divisions.show', compact('division'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
        return view('divisions.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|unique:divisions,name,' . $division->id . ',id,country_id,' . $division->country_id,
            'country_id' => 'required|exists:countries,id'
        ]);

        $division->update($validatedData);

        return redirect()->route('divisions.index')
        ->with('success', 'Division updated successfully.');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //

        $division->delete();

        return redirect()->route('divisions.index')
        ->with('success', 'Division deleted successfully.');
    }
}

