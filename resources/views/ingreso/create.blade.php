@extends('layout.layouts')

@section('content')
    <form action="/ingreso" method="POST">
        @csrf     
        <h1>mes de septiembre</h1>
        <p>nombre del gasto : </p>
        <input type="text" class="form-control" name="nombregasto">
        <p>Descripcion del gasto : </p>
        <input type="text" class="form-control" name="descripciongasto">
        <p>fecha del gasto : </p>
        <input type="date" class="form-control" name="fechagasto">
        <p>monto del gasto : </p>
        <input type="number" class="form-control" name="montogasto"><br>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection