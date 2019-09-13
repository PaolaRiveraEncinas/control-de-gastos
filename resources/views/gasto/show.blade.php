@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $Gasto->comida }} {{ $Gasto->baño }}
                </div>
                <div class="card-body">
                    <p>Direccion : {{ $Gasto->internet }}</p>
                    <p>Cedula Identidad : {{ $Gasto->agua }}</p>
                    <p>Celular : {{ $Gasto->luz }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection