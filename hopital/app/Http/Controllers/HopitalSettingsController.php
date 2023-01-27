<?php

namespace App\Http\Controllers;

use App\Models\HopitalSettings;
use App\Http\Requests\StoreHopitalSettingsRequest;
use App\Http\Requests\UpdateHopitalSettingsRequest;

class HopitalSettingsController extends Controller
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
     * @param  \App\Http\Requests\StoreHopitalSettingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHopitalSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HopitalSettings  $hopitalSettings
     * @return \Illuminate\Http\Response
     */
    public function show(HopitalSettings $hopitalSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HopitalSettings  $hopitalSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(HopitalSettings $hopitalSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHopitalSettingsRequest  $request
     * @param  \App\Models\HopitalSettings  $hopitalSettings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHopitalSettingsRequest $request, HopitalSettings $hopitalSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HopitalSettings  $hopitalSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(HopitalSettings $hopitalSettings)
    {
        //
    }
}
