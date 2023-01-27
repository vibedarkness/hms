<?php

namespace App\Http\Controllers;

use App\Models\TestLaboratoire;
use App\Http\Requests\StoreTestLaboratoireRequest;
use App\Http\Requests\UpdateTestLaboratoireRequest;

class TestLaboratoireController extends Controller
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
     * @param  \App\Http\Requests\StoreTestLaboratoireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestLaboratoireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestLaboratoire  $testLaboratoire
     * @return \Illuminate\Http\Response
     */
    public function show(TestLaboratoire $testLaboratoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestLaboratoire  $testLaboratoire
     * @return \Illuminate\Http\Response
     */
    public function edit(TestLaboratoire $testLaboratoire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestLaboratoireRequest  $request
     * @param  \App\Models\TestLaboratoire  $testLaboratoire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestLaboratoireRequest $request, TestLaboratoire $testLaboratoire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestLaboratoire  $testLaboratoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestLaboratoire $testLaboratoire)
    {
        //
    }
}
