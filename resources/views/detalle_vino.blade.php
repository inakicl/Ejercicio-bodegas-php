<?php
/**
 * Comprobar si se esta editando o no, si no ponerlo en disabled los input
 * @return string
 */
function ifEditar()
{
    $deshabilitar = "";
    !isset($_GET['accion']) ? $deshabilitar = "disabled" : $deshabilitar = "";
    return $deshabilitar;
}
?>
@extends('index')
@section('barra_datos')
    <div class="container">
        <div class="row">
            <h4 class="col-7">Datos bodega</h4>
            <a class="btn btn-outline-warning " href="?accion=editar"><i class="fas fa-edit"></i>Editar</a>
            <a class="btn btn-outline-primary " href="/bodegas/detalle/{{$bodega}}"><i class="fas fa-arrow-left"></i>Volver</a>
            <a class="btn btn-outline-danger " href="/vino/delete/{{$vino->id}}/{{$bodega}}"><i
                    class="fas fa-trash-alt"></i>Eliminar</a>
        </div>
    </div>
@endsection

@section('content')

    <form class="container" method="get" action="/vino/update">

        <input class="d-none" value="{{$bodega}}" name="bodega_id">
        <input class="d-none" value="{{$vino->id}}" name="vino_id">

        <div class="row ">
            <label class="col-form-label" for="nombre-input">Nombre</label>
            <input class="form-control" name="nombre" id="nombre-input" required
                   value="{{$vino->nombre}}" <?= ifEditar()?>>
        </div>
        <div class="row ">
            <label class="col-form-label" for="descripcion-input">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion-input"
                      required <?= ifEditar()?>>{{$vino->descripcion}}</textarea>
        </div>
        <div class="row ">
            <label class="col-form-label" for="anyo-input">Año</label>
            <input class="form-control" name="anyo" id="anyo-input" required
                   value="{{$vino->anyo}}" <?= ifEditar()?>>
        </div>
        <div class="row ">
            <label class="col-form-label" for="alcohol-input">Alcohol</label>
            <input class="form-control" name="alcohol" id="alcohol-input" required
                   placeholder="Porcentaje de alcohol" value="{{$vino->alcohol}}"<?= ifEditar()?>>
        </div>
        <div class="row ">
            <label class="col-form-label">Tipo de vino</label>
            <select class="form-control" name="tipo_vino" <?= ifEditar()?>>
                <option value="Tinto" @if($vino->tipo_de_vino == "Tinto") selected @endif>Tinto</option>
                <option value="Blanco" @if($vino->tipo_de_vino == "Blanco") selected @endif>Blanco</option>
                <option value="Rosado" @if($vino->tipo_de_vino == "Rosado") selected @endif>Rosado</option>
            </select>
        </div>
        <button class="btn btn-primary row mt-3" type="submit" <?= ifEditar()?>>Actualizar vino</button>
    </form>

@endsection
