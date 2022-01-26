<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBetaRequest;
use App\Http\Requests\UpdateBetaRequest;
use App\Models\Beta;

class BetaController extends Controller
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
     * @param  \App\Http\Requests\StoreBetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBetaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beta  $beta
     * @return \Illuminate\Http\Response
     */
    public function show(Beta $beta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beta  $beta
     * @return \Illuminate\Http\Response
     */
    public function edit(Beta $beta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBetaRequest  $request
     * @param  \App\Models\Beta  $beta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBetaRequest $request, Beta $beta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beta  $beta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beta $beta)
    {
        //
    }
}
