@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: #F8F9F9;">
            <h4>Listado de todos los productos</h4>
            <div>
                <a href="{{ url('product/create') }}" class="btn btn-primary btn-sm"> Nuevo Producto</a>
                <br>
                <hr>
            </div>

                @foreach ($productos as $item)
                <div class="card mb-4 border-0" style="max-width: 750px;">
                    <div class="row g-0">
                        <div class="col-md-3">
                        <img src="{{ URL::asset('/images/image_product.png')}}" style="margin: 10px ;" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nombre }}</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-primary">{{ $item->descripcion }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-3" style=" border-left: 1px solid #DFDFDF">
                            <div class="card-body">
                                <p class="text-primary text-center"><strong> {{ $item->precio }}</strong></p>

                                <p class="text-sm-center text-success">Disponible</p>

                                <p></p>
                                <div class="d-grid gap-2 mx-auto">
                                    {!! Form::open(['url'=>'product/eliminar']) !!}
                                    {!! Form::hidden('id', $item->id) !!}
                                    <button class="btn btn-light btn-sm" style="width: 100%" type="submit">Eliminar</button>
                                    {!! Form::close() !!}
                                    <button class="btn btn-primary btn-sm" type="button">Calificar</button>
                                  </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>

@endsection
