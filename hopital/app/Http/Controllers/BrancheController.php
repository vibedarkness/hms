<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use App\Http\Requests\StoreBrancheRequest;
use App\Http\Requests\UpdateBrancheRequest;

class BrancheController extends Controller
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
     * @param  \App\Http\Requests\StoreBrancheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrancheRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function show(Branche $branche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function edit(Branche $branche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrancheRequest  $request
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrancheRequest $request, Branche $branche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branche $branche)
    {
        //
    }
}
