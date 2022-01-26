@extends('layouts.master')
@section('title', 'Index Item')
@section('content')
<section>
    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="">
                            <form action="{{route('items.index')}}" class="form-inline d-flex justify-content-center" method="post">
                                @csrf
                                <i class="fas fa-search" aria-hidden="true"></i>
                                <div class="form-group">
                                    <select class="form-control form-control-md w-10" name="bytype" onchange="submit()">
                                        <option value=2 {{ old('bytype')=='0' ? 'selected' : '' }} selected> All </option>
                                        <option value=0 {{ old('bytype')=='1' ? 'selected' : '' }}> Movies </option>
                                        <option value=1 {{ old('bytype')=='2' ? 'selected' : '' }}> Series </option>
                                    </select>
                                    <input class="form-control form-control-sm ml-4 w-10" name="bytitle" type="search" value="{{ old('bytitle') }}" placeholder="Search by title" aria-label="Search">
                                    <input class="form-control form-control-sm ml-4 w-10" name="bysynopsis" type="search" value="{{ old('bysynopsis') }}" placeholder="Search by synopsis" aria-label="Search">
                                    <input class="form-control form-control-sm ml-4 w-10" name="byyear" type="number" value="{{ old('byyear') }}" placeholder="Search by year" aria-label="Search">
                                    <input class="form-control form-control-sm ml-4 w-10" name="byduration" type="number" value="{{ old('byduration') }}" placeholder="Search by duration" aria-label="Search">
                                    <button class="btn btm-outline-success my-4 mysm-0" type="submit">
                                        {{--<!-- icono lupa --> --}}<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search m-1  " viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        @foreach ($items as $item)
                        <div class="card m-5" style="width: 996px;">
                            <div class=" shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                                <a href="{{ route('items.show', $item) }}" class="stretched-link">
                                    <div class="m-3">
                                        <img src="{{ $item->image }}" class="img-fluid rounded-start" alt="{{ $item->image }}" style="max-width: 15rem; max-height:15rem;">
                                    </div>
                                </a>
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo: {{ $item->title }}</h5>
                                        <a class="card-text">Descripcion: {{ $item->synopsis }}</a><br>
                                        <a class="card-text">Generos: {{$item->genere}} </a>
                                        <small>
                                            <p class="card-text">Formato:@if (($item->type==0))Movie @else Serie @endif </p>

                                        </small>
                                        <div class="card-text">
                                            Price : {{$item->price}}€
                                        </div>
                                        <small class="text-muted">
                                            <div class="card-text">
                                                <a>Update at: {{ $item->updated_at }} </a>
                                                <a>Created at: {{ $item->created_at }} </a>
                                            </div>
                                        </small>
                                        <a href="#" class="btn btn-outline-primary"> Comprar </a>
                                        {{-- <a href="{{ route('items.show', $item) }}" class="btn btn-outline-primary"> Alquilar </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection