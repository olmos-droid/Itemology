@extends('layouts.master')
@section('title', 'Edit Item')
@section('content')
<section class="">
    <div class="container">

        <h1> Edit Item</h1>
        <form action="{{route('items.update',$item)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <div class="">
                    <label for="synopsis">
                        <input class="form-control" type="text" name="title" placeholder="Title" value="{{$item->title}}">
                    </label>
                </div>
                <div class="">
                    <label for="synopsis">
                        <textarea class="form-control" type="text" cols="30" rows="10" name="synopsis" placeholder="add text">{{$item->synopsis}}</textarea>
                    </label>
                </div>
                <div class="row ">

                    <div class="col">
                        <label for="type">
                            <select class="form-control" name="type" id="type" value="{{$item->type}}">
                                <option value="0">Movie</option>
                                <option value="1">Serie</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group mb-2 col">
                        <label for="duration">
                            <input class="form-control col-4" type="number" name="duration" id="duration" value="{{$item->duration}}" placeholder="duration/min">
                        </label>
                    </div>
                    <div class="form-group mb-2 col">
                        <label for="year">
                            <input class="form-control col-4" type="number" name="year" id="year" placeholder="year" value="{{$item->year}}">
                        </label>
                    </div>
                    <div class="form-group mb-2 col">
                        <label for="price">
                            <input class="form-control col-4" type="number" name="price" id="price" placeholder="price" value="{{$item->price}}">
                        </label>
                    </div>
                </div>
                <label for="formFileSm" class="form-label">Image Path</label>
                <input class="form-control" id="formFileSm" type="file" name="image" value={{$item->image}} />
                <label for="formFileSm" class="form-label">Film Path</label>
                <input class="form-control" id="formFileSm" type="file" id="file" name="file" value={{$moitemvie->file}} />
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Update Data</button>
            </div>
        </form>

    </div>
</section>
@endsection