@extends('layouts.app')
@section('content')
    <div class="container my-5 py-5">
        <div class="row my-3 py-3">
            <div class="col-12">
                <h5>Resultados de la búsqueda: {{ $q }}</h5>
            </div>
            @include('ads')
        </div>
    </div>
@endsection