<?php

namespace App\Http\Controllers;

use App\Models\Facturation;
use App\Http\Requests\StoreFacturationRequest;
use App\Http\Requests\UpdateFacturationRequest;

class FacturationController extends Controller
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
     * @param  \App\Http\Requests\StoreFacturationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facturation  $facturation
     * @return \Illuminate\Http\Response
     */
    public function show(Facturation $facturation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facturation  $facturation
     * @return \Illuminate\Http\Response
     */
    public function edit(Facturation $facturation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacturationRequest  $request
     * @param  \App\Models\Facturation  $facturation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacturationRequest $request, Facturation $facturation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facturation  $facturation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facturation $facturation)
    {
        //
    }
}
