<?php

namespace App\Http\Controllers;

use App\Models\Plainte;
use App\Http\Requests\StorePlainteRequest;
use App\Http\Requests\UpdatePlainteRequest;

class PlainteController extends Controller
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
     * @param  \App\Http\Requests\StorePlainteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlainteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function show(Plainte $plainte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function edit(Plainte $plainte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlainteRequest  $request
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlainteRequest $request, Plainte $plainte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plainte $plainte)
    {
        //
    }
}
