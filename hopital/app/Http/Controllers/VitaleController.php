<?php

namespace App\Http\Controllers;

use App\Models\Vitale;
use App\Http\Requests\StoreVitaleRequest;
use App\Http\Requests\UpdateVitaleRequest;

class VitaleController extends Controller
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
     * @param  \App\Http\Requests\StoreVitaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVitaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitale  $vitale
     * @return \Illuminate\Http\Response
     */
    public function show(Vitale $vitale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitale  $vitale
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitale $vitale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVitaleRequest  $request
     * @param  \App\Models\Vitale  $vitale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVitaleRequest $request, Vitale $vitale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitale  $vitale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitale $vitale)
    {
        //
    }
}
