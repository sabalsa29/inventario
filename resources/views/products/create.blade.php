@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                {!! Form::open(['url'=>'product/store', 'class'=>' row g-3']) !!}
                <div class="col-md-6">
                  <label for="" class="form-label">Producto</label>
                  <input name="nombre" type="text" class="form-control" placeholder="Nombre del producto">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Categoria</label>
                    {!! Form::select('categoria_id', $categorias, null, ['class'=>'form-select']) !!}
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Descripción</label>
                  <input name="descripcion" type="text" class="form-control" id="" placeholder="Descripcion del producto">
                </div>
                <div class="col-md-6">
                  <label class="form-label">Cantidad</label>
                  <input name="cantidad" type="number" class="form-control"  min="1">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Precio</label>
                    <input name="precio" type="number" class="form-control" min="0" step=".01">
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
