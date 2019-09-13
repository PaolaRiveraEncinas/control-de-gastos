@extends('layout.layouts')

@section('content')
    <form action="/Ingreso" method="POST">
        @csrf     
        <h1>mes de septiembre</h1>
        <p>nombre del gasto : </p>
        <input type="text" class="form-control" name="name">
        <p>Descripcion del gasto : </p>
        <input type="text" class="form-control" name="lastname">
        <p>fecha del gasto : </p>
        <input type="text" class="form-control" name="number">
        <p>monto del gasto : </p>
        <input type="text" class="form-control" name="cia">
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection