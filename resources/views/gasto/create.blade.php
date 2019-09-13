@extends('layout.layouts')

@section('content')
    <form action="/gasto" method="POST">
        @csrf     
        <p>comida : </p>
        <input type="text" class="form-control" name="food">
        <p>internet : </p>
        <input type="text" class="form-control" name="inter">
        <p>agua : </p>
        <input type="text" class="form-control" name="water">
        <p>luz : </p>
        <input type="text" class="form-control" name="light"><br>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
@endsection