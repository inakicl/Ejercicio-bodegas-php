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
                <a class="btn btn-outline-primary text-primary"
                   href="{{route('vinos.show', ['bodegaId'=>$bodega->id,'vinoId'=>$values->id])}}">
                    <i class="fas fa-sign-in-alt"></i> Ver</a>

                <form method="POST" action="{{route('vinos.destroy',['vinoId'=>$values->id,'bodegaId'=>$bodega->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger text-danger">
                        <i class="fas fa-trash-alt"></i>Borrar
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
