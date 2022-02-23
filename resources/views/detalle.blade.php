@extends('layouts.app')
@push('style')
<style>
    .neomorphInput {
        border-radius: 50px;
        background: #ddf0ff;
        box-shadow: 20px 20px 60px #bcccd9,
            -20px -20px 60px #feffff;
    }

    .sombraImg {
        box-shadow: 5px 5px 8px rgb(240, 166, 70);
    }

</style>
@endpush
@section('title', 'Contact')
@section('content')
<div class="container-fluid my-5 py-5">
    <div class="row text-center">
        <div class="col-12 my-5 py-5">
            <h1 class="text-white textshadow mb-4 reveal">{{ $ad->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
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
            <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-center">
                <p>{{ $ad->price }} euros.</p>
                <p>{{ $ad->description }}</p>
                <a
                    href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{__("ui.{$ad->category->name}")}}</a>
                <p>{{ $ad->created_at }}</p>
                <p>{{ $ad->user->name }}</p>
            </div>
        </div>
    </div>
</div>
    
@endsection
@push('scripts')
@endpush
