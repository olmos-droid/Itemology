<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //metodo old
        $request->flash();
        // index o tambien lista
        $items = Item::all();
        // $generes = Genere::all();
        if ($request->bytype != '' || $request->bytype != 0) {
            $items = Item::title("%$request->bytitle%")->synopsis("%$request->bysynopsis%")
                ->year("%$request->byyear%")
                ->duration("%$request->byduration%")
                ->type("$request->bytype")->get();
        }

        // if ($request->bytype != '' || $request->bytype != 0) {
        //     $movies = Movie::title("%$request->bytitle%")
        // ->synopsis("%$request->bysynopsis%")
        // ->year("%$request->byyear%")
        // ->duration("%$request->byduration%")
        // ->type("$request->bytype")
        //     ->get();
        // } else {
        // }
        return view('home')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $item = new Movie();
        // $item->title = $request->title;
        // $item->synopsis = $request->synopsis;
        // $item->type = $request->type;
        // $item->genere = $request->genere;
        // $item->duration = $request->duration;
        // $item->year = $request->year;
        // $item->price = $request->price;
        // $item->image = $request->image;
        // $item->file = $request->file;
        // $item->save();

        //assignacion massiva nos ahorramos el save y le pasamos todos los valores del request
        // dump($request->all());
        $item = Item::create($request->all());
        return redirect(route('items.show', $item));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        // $generes = Genere::all();
        // return view('show')->with('item', $item)->with('generes', $generes);
        return view('show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->title = $request->title;
        $item->synopsis = $request->synopsis;
        $item->type = $request->type;
        $item->genere = $request->genere;
        $item->duration = $request->duration;
        $item->year = $request->year;
        $item->price = $request->price;
        $item->image = $request->image;
        $item->file = $request->file;

        $item->save();

        return redirect(route('items.show', $item));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
