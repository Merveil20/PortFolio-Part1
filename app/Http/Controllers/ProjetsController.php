<?php

namespace App\Http\Controllers;

use App\Models\projets;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projets = projets::all();
        // return view('welcome', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
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
            'nomprojet' =>'required',
            'lienprojet' =>'required',
            'commentaireprojet' =>'required'
        ]);

        projets::create([
            'nom' => $request->nomprojet,
            'lien_projet' => $request->lienprojet,
            'description' => $request->commentaireprojet

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projets  $projets
     * @return \Illuminate\Http\Response
     */
    public function show(projets $projets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projets  $projets
     * @return \Illuminate\Http\Response
     */
    public function edit(projets $projets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projets  $projets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projets $projets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projets  $projets
     * @return \Illuminate\Http\Response
     */
    public function destroy(projets $projets)
    {
        //
    }
}
