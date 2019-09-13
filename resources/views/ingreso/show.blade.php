@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $ingreso->NombreGasto }} {{ $ingreso->DescripcionGasto }}
                </div>
                <div class="card-body">
                    <p>Fecha del Gasto : {{ $ingreso->FechaGasto }}</p>
                    <p>Monto del Gasto : {{ $ingreso->MontoGasto }}</p>
                    </div>
            </div>
        </div>
    </div>
@endsection