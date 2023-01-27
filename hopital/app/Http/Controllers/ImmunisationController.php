<?php

namespace App\Http\Controllers;

use App\Models\Immunisation;
use App\Http\Requests\StoreImmunisationRequest;
use App\Http\Requests\UpdateImmunisationRequest;

class ImmunisationController extends Controller
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
     * @param  \App\Http\Requests\StoreImmunisationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImmunisationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immunisation  $immunisation
     * @return \Illuminate\Http\Response
     */
    public function show(Immunisation $immunisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immunisation  $immunisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Immunisation $immunisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImmunisationRequest  $request
     * @param  \App\Models\Immunisation  $immunisation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImmunisationRequest $request, Immunisation $immunisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immunisation  $immunisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immunisation $immunisation)
    {
        //
    }
}
