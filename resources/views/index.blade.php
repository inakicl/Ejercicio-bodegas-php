<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!--  El que funciona -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>
    <title>El bodegón</title>
</head>
<body class="container-fluid">
<div class="row colored">
    <span class="col-12 text-center display-4">Gestión de Bodegas</span>
    <span class="col-12 text-center">Este proyecto muestra cómo hacer una aplicación web MVC con PHP.</span>
    <span class="col-12 text-center">El objetivo es mostrar cómo realizar una aplicación utilizando éste patron de diseño.</span>
</div>

<div class="container-fluid m-auto pt-4">
    @yield('barra_datos')
    @yield('content')
</div>

</body>
</html>
