<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            'nomservice' =>'required',
            //'imageservice' =>'required',
            'commentaireservice' =>'required'
        ]);

        // dd(Storage::put('exemple', $request->imageservice));

        // $filename = time() . '.' .$request->imageservice->extension();
        // $request->file('imageservice')->storeAs(
        //     'image',
        //     $filename,
        //     'public'
        // );

        Services::create([
            'nom' => $request->nomservice,
            //'image' => $request->imageservice,
            'description' =>$request->commentaireservice
        ]);
        return back();
        // $service = new Service();
        // $service->nom = $request->nomservice;
        // $service->image = $request->imageservice;
        // $service->description = $request->commentaireservice;
        // $service->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(services $services)
    {
        //
    }
}
