<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = membres::all();
        return view('welcome', compact('membre'));
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
            'nommembre' =>'required',
            //'imagemembre' =>'required',
            'postemembre' =>'required',
            'commentairemembre' =>'required',
            'facebook' =>'required',
            'twitter' =>'required',
            'whatsapp' =>'required',
            'github' =>'required',
            'gmail' =>'required'
        ]);

        membres::create([
            'nom'=>$request->nommembre,
            //'image'=>$request->imagemembre,
            'poste'=>$request->postemembre,
            'commentaire'=>$request->commentairemembre,
            'lien_facebook' =>$request->facebook,
            'lien_twitter' =>$request->twitter,
            'lien_whatsapp' =>$request->whatsapp,
            'lien_github'=>$request->github,
            'lien_gmail' =>$request->gmail
        ]);
       
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function show(membres $membres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function edit(membres $membres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, membres $membres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\membres  $membres
     * @return \Illuminate\Http\Response
     */
    public function destroy(membres $membres)
    {
        //
    }
}
