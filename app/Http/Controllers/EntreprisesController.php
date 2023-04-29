<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = entreprises::all();
        return view('welcome', compact('entreprises'));
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
            'nomentreprise' =>'required',
            'fonctionentreprise' =>'required',
            'lienentreprise' =>'required',
            'commentaireentreprise' =>'required'
        ]);

        entreprises::create([
            'nom'=> $request->nomentreprise,
            'fonction'=> $request->fonctionentreprise,
            'lien_entreprise'=> $request->lienentreprise,
            'description'=> $request->commentaireentreprise
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function show(entreprises $entreprises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function edit(entreprises $entreprises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entreprises $entreprises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprises  $entreprises
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprises $entreprises)
    {
        //
    }
}
