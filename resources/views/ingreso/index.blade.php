@extends('layout.layouts')

@section('content')
<a href="/ingreso/create" class="btn btn-primary mb-1"> Nuevo</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre del gasto</th>
            <th scope="col">descripcion del gasto</th>
            <th scope="col">fecha del gasto</th>
            <th scope="col">acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($datos as $dato)
              <tr>
                <th scope="row">{{ $dato->id }}</th>
                <td>{{ $dato->NombreGasto }}</td>
                <td>{{$dato->DescripcionGasto}}</td>
                <td>{{$dato->FechaGasto}}</td>
                <td class="form-inline ">
                    <form action="/ingreso/{{$dato->id}}" method="POST">
                        @method('GET')
                        <button type="submit" class="btn btn-primary mr-1"> Ver </button>    
                    </form>
                    <form action="/ingreso/{{$dato->id}}/edit" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success mr-1"> Editar </button>    
                    </form>
                    <form action="/ingreso/{{$dato->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Eliminar </button>    
                    </form>
                </td>
              </tr>
        @endforeach             
    </tbody>
</table>                    

@endsection
