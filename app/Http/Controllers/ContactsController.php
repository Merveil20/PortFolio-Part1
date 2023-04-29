<?php

namespace App\Http\Controllers;

use App\Mail\portMail;
use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mail::to('test@gmail.test')->send(new portMail());
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
            'nomcontact' =>'required',
            'mailcontact' =>'required|mail',
            'objetcontact' =>'required',
            'messagecontact' =>'required',
        ]);

        contacts::create([
            'nom' =>$request->nomcontact,
            'email' =>$request->mailcontact,
            'objet' =>$request->objetcontact,
            'message'=>$request->messagecontact
        ]);


        // $data = [
        //     'nom'=> $request->nomcontact,
        //     'email'=> $request->mailcontact ,
        //     'objet' => $request->objetcontact,
        //     'message' => $request->messagecontact
        // ];


         return back();



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(contacts $contacts)
    {
        //
    }
    public function mail(Request $request)
    {
         $data = [
            'nom' => $request->nomcontact,
            'email' => $request->mailcontact,
            'objet' => $request->objetcontact,
            'message' => $request->messagecontact
        ];
        Mail::to('test@mail.test')->send(new portMail($data));
        return back();
    }
}
