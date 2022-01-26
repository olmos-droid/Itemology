<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>
    <section class="">
        <div class="container">

            <h1 class="text-center"> Show item</h1>

            <div class="card m-2" style="max-width: auto;">
                <div class="row m-2">
                    <div class="">
                        <img src="{{ $item->image }}" class="img-fluid rounded-start" alt="{{ $item->image }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title ">Titulo: {{ $item->title }}</h3>
                            <p class="card-text">Descripcion: {{ $item->synopsis }}</p>
                            <p class="card-text">Generos:
                                {{ $item->genere}}
                            </p>
                            <p class="card-text">Formato:
                                @if (($item->type==0))
                                Movie
                                @else
                                Serie
                                @endif
                            </p>
                            <small class="text-muted">
                                <div class="card-text">
                                    <a>Update at: {{ $item->updated_at }} </a><br>
                                    <a>Created at: {{ $item->created_at }} </a>
                            </small>
                            </p>
                        </div>
                        <div>
                            <a href="{{ URL::route('items.edit',$item) }}" class="btn btn-outline-info"> Editar</a>
                            <a href="" class="btn btn-primary"> Comprar</a>
                            <a href="" class="btn btn-primary"> Alquilar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>