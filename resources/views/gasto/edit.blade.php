@extends('layout.layouts')

@section('content')
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>comida : </p>
        <input type="text" class="form-control" value="{{ $gasto->comida}}" name="food">
        <p>internet : </p>
        <input type="text" class="form-control" value="{{ $gasto->internet}}" name="inter">
        <p>agua : </p>
        <input type="text" class="form-control" value="{{ $gasto->agua}}" name="water">
        <p>luz : </p>
        <input type="text" class="form-control" value="{{ $gasto->luz}}" name="light"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection