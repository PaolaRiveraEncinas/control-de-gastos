@extends('layout.layouts')

@section('content')
    <form action="/contacto" method="POST">
        @csrf     
        <p>Ingresa tu nombre : </p>
        <input type="text" class="form-control" name="name">
        <p>Ingresa tu apellido : </p>
        <input type="text" class="form-control" name="lastname">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" name="number">
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" name="cia">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" name="address"><br>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
    <h1>ENVIAR EMAIL</h1>
@endsection