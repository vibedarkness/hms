<?php

namespace App\Http\Controllers;

use App\Models\Diagnostique;
use App\Http\Requests\StoreDiagnostiqueRequest;
use App\Http\Requests\UpdateDiagnostiqueRequest;

class DiagnostiqueController extends Controller
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
     * @param  \App\Http\Requests\StoreDiagnostiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiagnostiqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnostique  $diagnostique
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnostique $diagnostique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnostique  $diagnostique
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnostique $diagnostique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiagnostiqueRequest  $request
     * @param  \App\Models\Diagnostique  $diagnostique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiagnostiqueRequest $request, Diagnostique $diagnostique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnostique  $diagnostique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnostique $diagnostique)
    {
        //
    }
}
