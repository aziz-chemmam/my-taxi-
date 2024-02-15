<?php

namespace App\Http\Controllers;

use App\Models\trajet;
use Illuminate\Http\Request;

class trajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/drivers.trajet');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trajet = trajet::create([
        'depart'=> $request->input('depart'),
        'destination' => $request->input('destination'), 
        'place' => $request->input('place'), 
        'devis' => $request->input('devis'),  
         ]);
        return redirect('trajet')->with('Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(trajet $trajet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trajet $trajet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trajet $trajet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trajet $trajet)
    {
        //
    }
}
