<?php

namespace App\Http\Controllers;


use App\Models\membres;
use App\Models\projets;
use App\Models\services;
use App\Models\competences;
use App\Models\entreprises;
use Illuminate\Http\Request;


class CompetencesController extends Controller
{
    public $competences;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', ([
            'competences' => competences::all(),
            'services'  => services::all(),
            'projets' => projets::all(),
            'membres' => membres::all(),
            'entreprises' => entreprises::all()
        ]));


        //$competences = competences::all();


        Mail::to('djudjemerveil20@gmail.com')->send(new portMail());


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
            'nomcompetence' =>'required',
            'niveaucompetence' =>'required'
        ]);

        competences::create([
            'nom' => $request->nomcompetence,
            'pourcentage'=> $request->niveaucompetence
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\competences  $competences
     * @return \Illuminate\Http\Response
     */
    public function show(competences $competences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\competences  $competences
     * @return \Illuminate\Http\Response
     */
    public function edit(competences $competences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\competences  $competences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, competences $competences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\competences  $competences
     * @return \Illuminate\Http\Response
     */
    public function destroy(competences $competences)
    {
        //
    }
}
