<?php

namespace App\Http\Controllers;

use App\Models\CertificatMedical;
use App\Http\Requests\StoreCertificatMedicalRequest;
use App\Http\Requests\UpdateCertificatMedicalRequest;

class CertificatMedicalController extends Controller
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
     * @param  \App\Http\Requests\StoreCertificatMedicalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificatMedicalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificatMedical  $certificatMedical
     * @return \Illuminate\Http\Response
     */
    public function show(CertificatMedical $certificatMedical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificatMedical  $certificatMedical
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificatMedical $certificatMedical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificatMedicalRequest  $request
     * @param  \App\Models\CertificatMedical  $certificatMedical
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificatMedicalRequest $request, CertificatMedical $certificatMedical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificatMedical  $certificatMedical
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificatMedical $certificatMedical)
    {
        //
    }
}
