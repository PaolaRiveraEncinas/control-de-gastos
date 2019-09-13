@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $contacto->nombre }} {{ $contacto->apellido }}
                </div>
                <div class="card-body">
                    <p>Direccion : {{ $contacto->direccion }}</p>
                    <p>Cedula Identidad : {{ $contacto->ci }}</p>
                    <p>Celular : {{ $contacto->numero }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection