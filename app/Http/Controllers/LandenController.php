<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;

class LandenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $landen = Land::all();
        return view('landen.index', compact('landen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landen.create');
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
            'Naam' => 'required',
            'Landcode' => 'required',
            'MuntEenheid' => 'required',
            'Regeringsvorm' => 'required',
            'inwonersaantal' => 'required',
            'staatshoofd' => 'required',
            'oppervlakte' => 'required',
            'budget' => 'required'
        ]);

        Land::create($request->all());
        return redirect()->route('landen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spec = Land::find($id);
        $landen = Land::all();
        return view('landen.index', compact('landen'), ['spec' => $spec]); // -> index.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $land = land::find($id);
        return view('landen.edit', compact('land'));
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
        $request->validate([
            'Naam' => 'required',
            'Landcode' => 'required',
            'MuntEenheid' => 'required',
            'Regeringsvorm' => 'required',
            'inwonersaantal' => 'required',
            'staatshoofd' => 'required',
            'oppervlakte' => 'required',
            'budget' => 'required'
        ]); 
        $Naam = Land::find($id);
        // Getting values from the blade template form
        $Naam->Naam =  $request->get('Naam');
        $Naam->save();
        return redirect('/landen/index')->with('success', 'landen updated.'); // -> resources/views/stocks/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $land = Land::find($id);
        $land->delete();
        return redirect('/landen/index')->with('success', 'landen deleted!'); // -> resources/views/stocks/index.blade.php
    }
}
