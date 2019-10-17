@extends('layout.layouts')

@section('content')
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nombre del Gasto : </p>
        <input type="text" class="form-control" value="{{ $gasto->NombreGasto}}" name="nombregasto">
        <p>Monto del Gasto : </p>
        <input type="number" class="form-control" value="{{ $gasto->MontoGasto}}" name="montogasto">
        <p>Fecha : </p>
        <input type="date" class="form-control" value="{{ $gasto->Fecha}}" name="fecha">
        <p>Descripcion : </p>
        <input type="text" class="form-control" value="{{ $gasto->Descripcion}}" name="descrip"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection