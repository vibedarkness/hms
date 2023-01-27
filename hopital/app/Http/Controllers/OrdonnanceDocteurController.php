<?php

namespace App\Http\Controllers;

use App\Models\OrdonnanceDocteur;
use App\Http\Requests\StoreOrdonnanceDocteurRequest;
use App\Http\Requests\UpdateOrdonnanceDocteurRequest;

class OrdonnanceDocteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrdonnanceDocteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdonnanceDocteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdonnanceDocteur  $ordonnanceDocteur
     * @return \Illuminate\Http\Response
     */
    public function show(OrdonnanceDocteur $ordonnanceDocteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdonnanceDocteur  $ordonnanceDocteur
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdonnanceDocteur $ordonnanceDocteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdonnanceDocteurRequest  $request
     * @param  \App\Models\OrdonnanceDocteur  $ordonnanceDocteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdonnanceDocteurRequest $request, OrdonnanceDocteur $ordonnanceDocteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdonnanceDocteur  $ordonnanceDocteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdonnanceDocteur $ordonnanceDocteur)
    {
        //
    }
}
