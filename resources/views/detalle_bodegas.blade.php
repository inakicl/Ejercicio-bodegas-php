@extends('index')

@section('barra_datos')
    <div class="row mb-3">
        <div class="col-6">
            <div class="row">
                <h4 class="col-5">Datos bodega</h4>
                <a class="btn btn-outline-warning col-2" href="?accion=editar"><i class="fas fa-edit"></i>Editar</a>
                <a class="btn btn-outline-primary col-2" href="/bodegas"><i class="fas fa-arrow-left"></i>Volver</a>
                <a class="btn btn-outline-danger col-2" href="/bodegas/delete/{{$bodega->id}}"><i class="fas fa-trash-alt"></i>Eliminar</a>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <h4 class="col-6">Vinos disponibles</h4>
                <a class="offset-2  btn btn-outline-primary" href="/bodegas/detalle/{{$bodega->id}}/add_vino"><i class="fas fa-plus"></i>Añadir vino</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-6">
            @include('formulario_bodegas')
        </div>
        <div class="col-6">
            @include('vinos')
        </div>
    </div>


@endsection
