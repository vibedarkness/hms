<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Http\Requests\StoreChambreRequest;
use App\Http\Requests\UpdateChambreRequest;

class ChambreController extends Controller
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
     * @param  \App\Http\Requests\StoreChambreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChambreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function show(Chambre $chambre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChambreRequest  $request
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChambreRequest $request, Chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambre $chambre)
    {
        //
    }
}
