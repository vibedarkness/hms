<?php

namespace App\Http\Controllers;

use App\Models\DonneurSang;
use App\Http\Requests\StoreDonneurSangRequest;
use App\Http\Requests\UpdateDonneurSangRequest;

class DonneurSangController extends Controller
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
     * @param  \App\Http\Requests\StoreDonneurSangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonneurSangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonneurSang  $donneurSang
     * @return \Illuminate\Http\Response
     */
    public function show(DonneurSang $donneurSang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonneurSang  $donneurSang
     * @return \Illuminate\Http\Response
     */
    public function edit(DonneurSang $donneurSang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonneurSangRequest  $request
     * @param  \App\Models\DonneurSang  $donneurSang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonneurSangRequest $request, DonneurSang $donneurSang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonneurSang  $donneurSang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonneurSang $donneurSang)
    {
        //
    }
}
