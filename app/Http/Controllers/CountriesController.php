<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountriesController extends Controller
{
    /**
     * Display a listing of the countries.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new country .
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        country::create([
            'name' => $request->name ,
            'code' => $request->code,
            'currency_code' => $request->currency_code,
            'currency_symbol' => $request->currency_symbol


       ]);
        return redirect()->route('countries.index');
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

        $country = Country::findOrFail($id);

        return view('countries.show', compact('country'));
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

        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
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
        $country = Country::findOrFail($id);
        $country->update([
            'name' => $request->name,
            'code' => $request->code,
            'currency_code' => $request->currency_code,
            'currency_symbol' => $request->currency_symbol,
        ]);

        //return redirect()->back();
        return redirect()->route('countries.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Country Find Or Fail
        $country = Country::findOrFail($id);
        $country->delete();

        return redirect()->route('countries.index');
    }
}
