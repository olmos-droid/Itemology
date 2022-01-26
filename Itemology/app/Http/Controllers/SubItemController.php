<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubItemRequest;
use App\Http\Requests\UpdateSubItemRequest;
use App\Models\SubItem;

class SubItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subItem = SubItem::all();
        return $subItem;
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
     * @param  \App\Http\Requests\StoreSubItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubItem  $subItem
     * @return \Illuminate\Http\Response
     */
    public function show(SubItem $subItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubItem  $subItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SubItem $subItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubItemRequest  $request
     * @param  \App\Models\SubItem  $subItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubItemRequest $request, SubItem $subItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubItem  $subItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubItem $subItem)
    {
        //
    }
}
