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
