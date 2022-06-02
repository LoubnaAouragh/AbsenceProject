<?php

namespace App\Http\Controllers;

use App\Models\Etudier;
use App\Http\Requests\StoreEtudierRequest;
use App\Http\Requests\UpdateEtudierRequest;

class EtudierController extends Controller
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
     * @param  \App\Http\Requests\StoreEtudierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtudierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudier  $etudier
     * @return \Illuminate\Http\Response
     */
    public function show(Etudier $etudier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudier  $etudier
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudier $etudier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtudierRequest  $request
     * @param  \App\Models\Etudier  $etudier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtudierRequest $request, Etudier $etudier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudier  $etudier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudier $etudier)
    {
        //
    }
}
