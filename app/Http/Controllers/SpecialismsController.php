<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialism;

class SpecialismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialisms = Specialism::all();
        return view('specialisms.index', compact('specialisms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialisms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        specialism::create([
            'name' => $request->name ,
            'Slug' => $request->Slug,
            'image' => $request->image



        ]);
        return redirect()->route('specialisms.index');
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

        $specialism = Specialism::findOrFail($id);

        return view('specialisms.show', compact('specialism'));
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

        $specialism= Specialism::findOrFail($id);
        return view('specialisms.edit', compact('specialism'));
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
        $specialism = Specialism::findOrFail($id);
        $specialism->update([
            'name' => $request->name,
            'Slug' => $request->Slug,
            'image' => $request->image

        ]);
        //return redirect()->back();
        return redirect()->route('specialisms.index');

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
        $specialism = Specialism::findOrFail($id);
        $specialism->delete();

        return redirect()->route('specialisms.index');
    }
}
