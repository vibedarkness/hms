<?php

namespace App\Http\Controllers;

use App\Models\BanqueSang;
use App\Http\Requests\StoreBanqueSangRequest;
use App\Http\Requests\UpdateBanqueSangRequest;

class BanqueSangController extends Controller
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
     * @param  \App\Http\Requests\StoreBanqueSangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBanqueSangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BanqueSang  $banqueSang
     * @return \Illuminate\Http\Response
     */
    public function show(BanqueSang $banqueSang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BanqueSang  $banqueSang
     * @return \Illuminate\Http\Response
     */
    public function edit(BanqueSang $banqueSang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBanqueSangRequest  $request
     * @param  \App\Models\BanqueSang  $banqueSang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBanqueSangRequest $request, BanqueSang $banqueSang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BanqueSang  $banqueSang
     * @return \Illuminate\Http\Response
     */
    public function destroy(BanqueSang $banqueSang)
    {
        //
    }
}
