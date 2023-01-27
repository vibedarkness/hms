<?php

namespace App\Http\Controllers;

use App\Models\DemandeSang;
use App\Http\Requests\StoreDemandeSangRequest;
use App\Http\Requests\UpdateDemandeSangRequest;

class DemandeSangController extends Controller
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
     * @param  \App\Http\Requests\StoreDemandeSangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemandeSangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DemandeSang  $demandeSang
     * @return \Illuminate\Http\Response
     */
    public function show(DemandeSang $demandeSang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DemandeSang  $demandeSang
     * @return \Illuminate\Http\Response
     */
    public function edit(DemandeSang $demandeSang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDemandeSangRequest  $request
     * @param  \App\Models\DemandeSang  $demandeSang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemandeSangRequest $request, DemandeSang $demandeSang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DemandeSang  $demandeSang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemandeSang $demandeSang)
    {
        //
    }
}
