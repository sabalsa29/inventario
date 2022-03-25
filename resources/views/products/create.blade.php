@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                {!! Form::open(['url'=>'product/store', 'class'=>' row g-3']) !!}
                <div class="col-md-6">
                  <label for="" class="form-label">Producto</label>
                  {{ Form::text('nombre',null,['class'=>'form-control','required','placeholder'=>'Nombre del Producto']) }}
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Categoria</label>
                    {!! Form::select('categoria_id', $categorias, null, ['class'=>'form-select','require']) !!}
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Descripción</label>
                  {{ Form::text('descripcion',null,['class'=>'form-control','required','placeholder'=>'Descripcion del producto']) }}

                </div>
                <div class="col-md-6">
                  <label class="form-label">Cantidad</label>
                  <input name="cantidad" require type="number" class="form-control" value="1" min="1">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Precio</label>
                    <input name="precio" type="number" class="form-control" require value="0" min="0" step=".01">
                  </div>
                <div class="col-12">
                    <a href="{{ url('/product') }}" class="btn btn-secondary"> Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
