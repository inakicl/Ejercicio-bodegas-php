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

/**
 * Poner textos o action del formulario dependiendo de si se edita o añade
 * @param $tipo
 * @return string
 */
function addOrEdit($tipo)
{
    switch ($tipo) {
        case "action":
            if (isset($_GET['accion']) && ($_GET['accion'] == "anyadir")) {
                return "/bodegas/anyadir";
            } else {
                return "/bodegas/update";
            }
            break;
        case "boton":
            if (isset($_GET['accion']) && ($_GET['accion'] == "anyadir")) {
                return "Añadir";
            } else {
                return "Guardar";
            }
            break;
    }
}
?>
<form class="container" method="get" action= <?= addOrEdit("action")?>>
    <input class="d-none" value="@if($bodega ?? '' != null){{$bodega->id}}@endif" name="bodega_id">

    <div class="row ">
        <label class="col-form-label" for="nombre-input">Nombre</label>
        <!-- Si se pone en disabled o no depende de si se edita, y si estamos en detalle para poner los datos de la bodega pasados por parametros-->
        <input class="form-control" name="nombre" id="nombre-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->nombre}}@endif" required>
    </div>
    <div class="row ">
        <label class="col-form-label" for="direccion-input">Dirección</label>
        <input class="form-control" name="direccion" id="direccion-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->localizacion}}@endif" required>
    </div>
    <div class="row ">
        <label class="col-form-label" for="email-input">Email</label>
        <input class="form-control" name="email" id="email-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->email}}@endif" required>
    </div>
    <div class="row ">
        <label class="col-form-label" for="telefono-input">Teléfono</label>
        <input class="form-control" name="telefono" id="telefono-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->telefono}}@endif" required>
    </div>
    <div class="row ">
        <label class="col-form-label" for="contacto-input">Página de contacto</label>
        <input class="form-control" name="pagina_contacto" id="contacto-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->pagina_contacto}}@endif" required>
    </div>
    <div class="row ">
        <label class="col-form-label" for="anyo-input">Año de fundación</label>
        <input class="form-control" name="anyo" id="anyo-input" <?= ifEditar()?>
        value="@if($bodega ?? '' != null){{$bodega->anyo_fundacion}}@endif" required>
    </div>

    <div class="row form-group">
        <label class="col-form-label col-12">¿Dispone de restaurante?</label>
        <div class="col-12">
            <!-- poner el checked en el radio correcto-->
            <label><input type="radio" name="rest_radio" value="1" id="restaurante_si" <?= ifEditar()?>
                @if($bodega ?? '' != null) {{  ($bodega->if_restaurante=="1")? "checked" : "" }}@endif>Sí</label>
        </div>
        <div class="col-12">
            <label><input type="radio" name="rest_radio" value="0" id="restaurante_no" <?= ifEditar()?>
                @if($bodega ?? '' != null) {{ ($bodega->if_restaurante=="0")? "checked" : "" }}@else checked @endif>No</label>
        </div>
    </div>

    <div class="row form-group">
        <label class="col-form-label col-12">¿Dispone de hotel?</label>
        <div class="col-12">
            <label><input type="radio" name="hotel_radio" value="1" <?= ifEditar()?>
                id="hotel_si" @if($bodega ?? '' != null){{ ($bodega->if_hotel=="1")? "checked" : "" }}@endif>Sí</label>
        </div>
        <div class="col-12">
            <label><input type="radio" name="hotel_radio" value="0" id="hotel_no" <?= ifEditar()?>
                @if($bodega ?? '' != null) {{ ($bodega->if_hotel=="0")? "checked" : "" }}@else checked @endif>No</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" <?= ifEditar()?>>
        <?= addOrEdit("boton")?>
    </button>

</form>
