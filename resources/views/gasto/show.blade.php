@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $gasto->NombreGasto }}
                </div>
                <div class="card-body">
                        <p>Monto del gasto : {{ $gasto->MontoGasto }}</p>
                        <p>fecha : {{ $gasto->Fecha }}</p>
                        <p>descripcion : {{ $gasto->Descripcion }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection