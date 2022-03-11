@extends('layouts.app')
@push('style')
<style>

    body {
        background-color: rgb(222, 229, 240);
    }

    .fotoDetalle {
        border-radius: 12px;
    }

    .enlace {
        text-decoration: none;
        color: black;
    }

    .cardDetalle {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endpush
@section('title', 'Contact')
@section('content')
<div class="container">
    <div class="row my-5 py-5">
        <div class="col-12 col-md-6 text-center">
            <h3 class="text-white textshadow mb-2">{{ $ad->title }}</h3>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner shadow fotoDetalle">
                    @foreach ($ad->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                        <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 cardDetalle">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-body fw-bold h6">
                    <p>Precio : {{ $ad->price }} euros.</p>
                    <p>Descripcion : {{ $ad->description }}</p>
                    <p>Categoria : <a class="enlace card-link" href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{__("ui.{$ad->category->name}")}}</a>
                    </p>
                    <p>Usuario : <a class="enlace card-link" href="{{route('user.ads',['name'=>$ad->user->name,'id'=>$ad->user->id])}}">{{ $ad->user->name }}</a>
                    </p>
                </div>
            </div>
        </div>
    
        {{-- <div class="col-12 col-md-6 text-end fw-bold">
            <p>Precio : {{ $ad->price }} euros.</p>
            <p>Descripcion : {{ $ad->description }}</p>
            <p>Categoria : <a class="enlace card-link" href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{__("ui.{$ad->category->name}")}}</a>
            </p>
            <p>Usuario : <a class="enlace mb-2" href="{{route('user.ads',['name'=>$ad->user->name,'id'=>$ad->user->id])}}">{{ $ad->user->name }}</a>
            </p>
        </div> --}}
        </div>
    </div>
</div>
    
@endsection
@push('scripts')
@endpush
