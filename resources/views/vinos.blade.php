<table class="table text-center">
    <thead>
    <th>Nombre</th>
    <th>Tipo</th>
    <th>Acciones</th>
    </thead>
    <!-- Bucle que rellene las rows desde base de datos, tratandolo desde el controller-->
    <tbody>
    @foreach($vinos as $vino => $values)
        <tr>
            <td>{{$values->nombre}}</td>
            <td>{{$values->tipo_de_vino}}</td>
            <!-- Acciones -->
            <td>
                <a class="btn btn-outline-primary text-primary" href="/bodegas/detalle/{{$bodega->id}}/vino/detalle/{{$values->id}}"><i class="fas fa-sign-in-alt"></i> Ver</a>
                <a class="btn btn-outline-danger text-danger" href="/vino/delete/{{$values->id}}/{{$bodega->id}}"><i
                        class="fas fa-trash-alt"></i> Borrar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
