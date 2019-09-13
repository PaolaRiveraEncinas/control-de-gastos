@extends('layout.layouts')

@section('content')
    <form action="/contacto/{{$contacto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingresa tu nombre : </p>
        <input type="text" class="form-control" value="{{ $contacto->nombre}}" name="name">
        <p>Ingresa tu apellido : </p>
        <input type="text" class="form-control" value="{{ $contacto->apellido}}" name="lastname">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" value="{{ $contacto->numero}}" name="number">
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" value="{{ $contacto->ci}}" name="cia">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" value="{{ $contacto->direccion}}" name="address"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection