<?php

namespace App\Http\Controllers;

use App\Models\Infirmier;
use App\Http\Requests\StoreInfirmierRequest;
use App\Http\Requests\UpdateInfirmierRequest;

class InfirmierController extends Controller
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
     * @param  \App\Http\Requests\StoreInfirmierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfirmierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function show(Infirmier $infirmier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function edit(Infirmier $infirmier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfirmierRequest  $request
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfirmierRequest $request, Infirmier $infirmier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infirmier $infirmier)
    {
        //
    }
}
