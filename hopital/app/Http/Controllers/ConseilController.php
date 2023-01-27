<?php

namespace App\Http\Controllers;

use App\Models\Conseil;
use App\Http\Requests\StoreConseilRequest;
use App\Http\Requests\UpdateConseilRequest;

class ConseilController extends Controller
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
     * @param  \App\Http\Requests\StoreConseilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConseilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function show(Conseil $conseil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function edit(Conseil $conseil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConseilRequest  $request
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConseilRequest $request, Conseil $conseil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conseil  $conseil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conseil $conseil)
    {
        //
    }
}
