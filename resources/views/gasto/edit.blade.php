@extends('layout.layouts')

@section('content')
    <form action="/Gasto/{{$Gasto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>comida : </p>
        <input type="text" class="form-control" value="{{ $Gasto->comida}}" name="food">
        <p>baño : </p>
        <input type="text" class="form-control" value="{{ $Gasto->baño}}" name="restroom">
        <p>internet : </p>
        <input type="text" class="form-control" value="{{ $Gasto->internet}}" name="inter">
        <p>agua : </p>
        <input type="text" class="form-control" value="{{ $Gasto->agua}}" name="water">
        <p>luz : </p>
        <input type="text" class="form-control" value="{{ $Gasto->luz}}" name="light"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection