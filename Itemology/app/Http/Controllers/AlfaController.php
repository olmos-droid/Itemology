<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlfaRequest;
use App\Http\Requests\UpdateAlfaRequest;
use App\Models\Alfa;

class AlfaController extends Controller
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
     * @param  \App\Http\Requests\StoreAlfaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlfaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alfa  $alfa
     * @return \Illuminate\Http\Response
     */
    public function show(Alfa $alfa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alfa  $alfa
     * @return \Illuminate\Http\Response
     */
    public function edit(Alfa $alfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlfaRequest  $request
     * @param  \App\Models\Alfa  $alfa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlfaRequest $request, Alfa $alfa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alfa  $alfa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alfa $alfa)
    {
        //
    }
}
