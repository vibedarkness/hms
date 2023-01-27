<?php

namespace App\Http\Controllers;

use App\Models\Laboratoire;
use App\Http\Requests\StoreLaboratoireRequest;
use App\Http\Requests\UpdateLaboratoireRequest;

class LaboratoireController extends Controller
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
     * @param  \App\Http\Requests\StoreLaboratoireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaboratoireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratoire  $laboratoire
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratoire $laboratoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratoire  $laboratoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratoire $laboratoire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaboratoireRequest  $request
     * @param  \App\Models\Laboratoire  $laboratoire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaboratoireRequest $request, Laboratoire $laboratoire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratoire  $laboratoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratoire $laboratoire)
    {
        //
    }
}
