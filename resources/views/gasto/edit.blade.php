@extends('layout.layouts')

@section('content')
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nombre del Gasto : </p>
        <input type="text" class="form-control" value="{{ $gasto->comida}}" name="nombregasto">
        <p>Monto del Gasto : </p>
        <input type="number" class="form-control" value="{{ $gasto->internet}}" name="montogasto">
        <p>Fecha : </p>
        <input type="date" class="form-control" value="{{ $gasto->agua}}" name="fecha">
        <p>Descripcion : </p>
        <input type="text" class="form-control" value="{{ $gasto->luz}}" name="descrip"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection