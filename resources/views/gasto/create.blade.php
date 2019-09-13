@extends('layout.layouts')

@section('content')
    <form action="/gasto" method="POST">
        @csrf     
        <p>Nombre del Gasto : </p>
        <input type="text" class="form-control" name="nombregasto">
        <p>Monto del gasto : </p>
        <input type="number" class="form-control" name="montogasto">
        <p>Fecha : </p>
        <input type="date" class="form-control" name="fecha">
        <p>Descripcion : </p>
        <input type="text" class="form-control" name="descrip"><br>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection