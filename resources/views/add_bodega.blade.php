@extends('index')

@section('barra_datos')
    <div class="row ml-5 mr-5 form-group">
        <h4 class="col-10">Nueva bodega</h4>
        <a class="btn btn-info text-white col-2" href="/bodegas">Volver</a>
    </div>
@endsection

@section('content')
    @include('formulario_bodegas')

@endsection
