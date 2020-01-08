@extends('index')

@section('content')
    <a class="btn btn-primary mb-4" href="{{route('bodegas.create')}}?accion=anyadir"><i class="fas fa-plus"></i> Añadir
        bodega</a>

    <table class="table text-center">
        <thead>
        <th>Nombre</th>
        <th>Localización</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
        </thead>
        <!-- Bucle que rellene las rows desde base de datos, tratandolo desde el controller-->
        <tbody>
        @foreach($bodegas as $bodega => $values)
            <tr>
                <td>{{$values->nombre}}</td>
                <td>{{$values->localizacion}}</td>
                <td>{{$values->telefono}}</td>
                <td>{{$values->email}}</td>
                <!-- Acciones -->
                <td>
                    <a class="btn btn-outline-primary text-primary"
                       href="{{route('bodegas.show',['id'=>$values->id])}}"><i
                            class="fas fa-sign-in-alt"></i> Entrar</a>
                    <form method="POST" action="{{route('bodegas.destroy', ['id'=>$values->id])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger text-danger">
                            <i class="fas fa-trash-alt"></i> Borrar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
