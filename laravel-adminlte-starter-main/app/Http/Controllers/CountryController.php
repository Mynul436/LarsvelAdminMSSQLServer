<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class CountryController extends Controller
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

    $countries = Country::all();
  
    return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('countries.create');
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
            'name' => 'required|unique:countries|max:255',
            // 'code' => 'required|unique:countries|max:10',
        ]);

        $country = new Country;
        $country->name = $request->name;
        $country->user_id = auth()->user()->id;
        // $country->code = $request->code;
        $country->save();

        return redirect()->route('countries.index')->with('success', 'Country created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $divisions = Division::where('country_id', $country->id)->get();
        $country = Country::findOrFail($id);
        return view('countries.show', compact('country'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:countries,name,' . $id,
            'code' => 'nullable|max:10|unique:countries,code,' . $id,
        ]);

        $country = Country::findOrFail($id);
        $country->update($validatedData);

        return redirect()->route('countries.show', $country->id)
            ->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('countries.index')
            ->with('success', 'Country deleted successfully.');
 

    }
}
