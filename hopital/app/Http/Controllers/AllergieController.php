<?php

namespace App\Http\Controllers;

use App\Models\Allergie;
use App\Http\Requests\StoreAllergieRequest;
use App\Http\Requests\UpdateAllergieRequest;

class AllergieController extends Controller
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
     * @param  \App\Http\Requests\StoreAllergieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllergieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergie  $allergie
     * @return \Illuminate\Http\Response
     */
    public function show(Allergie $allergie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allergie  $allergie
     * @return \Illuminate\Http\Response
     */
    public function edit(Allergie $allergie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAllergieRequest  $request
     * @param  \App\Models\Allergie  $allergie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllergieRequest $request, Allergie $allergie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergie  $allergie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergie $allergie)
    {
        //
    }
}
