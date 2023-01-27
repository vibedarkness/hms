<?php

namespace App\Http\Controllers;

use App\Models\TypeMedecin;
use App\Http\Requests\StoreTypeMedecinRequest;
use App\Http\Requests\UpdateTypeMedecinRequest;

class TypeMedecinController extends Controller
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
     * @param  \App\Http\Requests\StoreTypeMedecinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeMedecinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeMedecin  $typeMedecin
     * @return \Illuminate\Http\Response
     */
    public function show(TypeMedecin $typeMedecin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeMedecin  $typeMedecin
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeMedecin $typeMedecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeMedecinRequest  $request
     * @param  \App\Models\TypeMedecin  $typeMedecin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeMedecinRequest $request, TypeMedecin $typeMedecin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeMedecin  $typeMedecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeMedecin $typeMedecin)
    {
        //
    }
}
