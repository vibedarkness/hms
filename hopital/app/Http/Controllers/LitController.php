<?php

namespace App\Http\Controllers;

use App\Models\Lit;
use App\Http\Requests\StoreLitRequest;
use App\Http\Requests\UpdateLitRequest;

class LitController extends Controller
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
     * @param  \App\Http\Requests\StoreLitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lit  $lit
     * @return \Illuminate\Http\Response
     */
    public function show(Lit $lit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lit  $lit
     * @return \Illuminate\Http\Response
     */
    public function edit(Lit $lit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLitRequest  $request
     * @param  \App\Models\Lit  $lit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLitRequest $request, Lit $lit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lit  $lit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lit $lit)
    {
        //
    }
}
