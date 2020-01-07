@extends('index')
@section('barra_datos')
    <div class="row ml-5 mr-5 form-group">
        <h4 class="col-10">Nuevo vino</h4>
        <a class="btn btn-info text-white col-2" href="/bodegas/detalle/{{$bodega->id}}">Volver</a>
    </div>
@endsection

@section('content')

    <form class="container" method="get" action="/vino/add">

        <input class="d-none" value="{{$bodega->id}}" name="bodega_id">

        <div class="row ">
            <label class="col-form-label" for="nombre-input">Nombre</label>
            <input class="form-control" name="nombre" id="nombre-input" required>
        </div>
        <div class="row ">
            <label class="col-form-label" for="descripcion-input">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion-input" required></textarea>
        </div>
        <div class="row ">
            <label class="col-form-label" for="anyo-input">Año</label>
            <input class="form-control" name="anyo" id="anyo-input" required>
        </div>
        <div class="row ">
            <label class="col-form-label" for="alcohol-input">Alcohol</label>
            <input class="form-control" name="alcohol" id="alcohol-input" required placeholder="Porcentaje de alcohol">
        </div>
        <div class="row ">
            <label class="col-form-label">Tipo de vino</label>
            <select class="form-control" name="tipo_vino">
                <option value="Tinto">Tinto</option>
                <option value="Blanco">Blanco</option>
                <option value="Rosado">Rosado</option>
            </select>
        </div>
        <button class="btn btn-primary row mt-3" type="submit">Añadir vino</button>
    </form>

@endsection
