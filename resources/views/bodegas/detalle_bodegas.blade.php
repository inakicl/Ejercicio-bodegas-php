@extends('index')

@section('barra_datos')
    <div class="row mb-3">
        <div class="col-6">
            <div class="row">
                <h4 class="col-5">Datos bodega</h4>
                <div class="col-2">
                    <a class="btn btn-outline-warning" href="?accion=editar"><i class="fas fa-edit"></i>Editar</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-primary" href="{{route('bodegas.index')}}"><i
                            class="fas fa-arrow-left"></i>Volver</a>
                </div>
                <form action="{{route('bodegas.destroy',['id'=>$bodega->id])}}" method="POST" class="col-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger "><i
                            class="fas fa-trash-alt"></i>Eliminar
                    </button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <h4 class="col-6">Vinos disponibles</h4>
                <a class="offset-2  btn btn-outline-primary" href="{{route('vinos.create',['bodegaId'=>$bodega->id])}}">
                    <i class="fas fa-plus"></i>Añadir vino</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-6">
            @include('bodegas.formulario_bodegas')
        </div>
        <div class="col-6">
            @include('vinos.vinos')
        </div>
    </div>


@endsection
