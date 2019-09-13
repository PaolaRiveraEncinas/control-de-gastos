@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $gasto->comida }}
                </div>
                <div class="card-body">
                        <p>internet : {{ $gasto->internet }}</p>
                        <p>agua : {{ $gasto->agua }}</p>
                        <p>luz : {{ $gasto->luz }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection