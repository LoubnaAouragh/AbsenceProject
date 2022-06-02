<?php

namespace App\Http\Controllers;

use App\Models\Enseigner;
use App\Http\Requests\StoreEnseignerRequest;
use App\Http\Requests\UpdateEnseignerRequest;

class EnseignerController extends Controller
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
     * @param  \App\Http\Requests\StoreEnseignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnseignerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseigner  $enseigner
     * @return \Illuminate\Http\Response
     */
    public function show(Enseigner $enseigner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enseigner  $enseigner
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseigner $enseigner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnseignerRequest  $request
     * @param  \App\Models\Enseigner  $enseigner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnseignerRequest $request, Enseigner $enseigner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseigner  $enseigner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseigner $enseigner)
    {
        //
    }
}
