<?php

namespace App\Http\Controllers;

use App\Models\Guichets;
use App\Http\Requests\StoreGuichetsRequest;
use App\Http\Requests\UpdateGuichetsRequest;

class GuichetsController extends Controller
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
     * @param  \App\Http\Requests\StoreGuichetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuichetsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guichets  $guichets
     * @return \Illuminate\Http\Response
     */
    public function show(Guichets $guichets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guichets  $guichets
     * @return \Illuminate\Http\Response
     */
    public function edit(Guichets $guichets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuichetsRequest  $request
     * @param  \App\Models\Guichets  $guichets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuichetsRequest $request, Guichets $guichets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guichets  $guichets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guichets $guichets)
    {
        //
    }
}
