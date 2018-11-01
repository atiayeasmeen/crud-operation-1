<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController extends Controller
{
    /**
     * Display a listing of the locations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new location.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        location::create([
            'name' => $request->name ,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude


        ]);
        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Find the user or fail

        $location = Location::findOrFail($id);

        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Country Find or fail

        $location = Location::findOrFail($id);
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude

        ]);

        //return redirect()->back();
        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Location Find Or Fail
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('locations.index');
    }
}
