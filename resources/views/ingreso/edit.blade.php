@extends('layout.layouts')

@section('content')
    <form action="/ingreso/{{$ingreso->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>nombre del gasto : </p>
        <input type="text" class="form-control" value="{{ $ingreso->NombreGasto}}" name="nombregasto">
        <p>descripcion del gasto : </p>
        <input type="text" class="form-control" value="{{ $ingreso->DescripcionGasto}}" name="descripciongasto">
        <p>fecha del gasto : </p>
        <input type="text" class="form-control" value="{{ $ingreso->FechaGasto}}" name="fechagasto">
        <p>monto del gasto : </p>
        <input type="text" class="form-control" value="{{ $ingreso->MontoGasto}}" name="montogasto"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection