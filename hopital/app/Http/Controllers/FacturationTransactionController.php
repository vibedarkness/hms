<?php

namespace App\Http\Controllers;

use App\Models\FacturationTransaction;
use App\Http\Requests\StoreFacturationTransactionRequest;
use App\Http\Requests\UpdateFacturationTransactionRequest;

class FacturationTransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreFacturationTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacturationTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacturationTransaction  $facturationTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(FacturationTransaction $facturationTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacturationTransaction  $facturationTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(FacturationTransaction $facturationTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacturationTransactionRequest  $request
     * @param  \App\Models\FacturationTransaction  $facturationTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacturationTransactionRequest $request, FacturationTransaction $facturationTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacturationTransaction  $facturationTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacturationTransaction $facturationTransaction)
    {
        //
    }
}
