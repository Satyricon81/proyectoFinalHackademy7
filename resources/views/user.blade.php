@extends('layouts.app')
@push('style')
<style>
    
    body {
        background-color: rgb(222, 229, 240);
    }
    
    .head {
        height: 100vh;
        width: 100%;
    }
    
    .card-ads {
        background-color: #FAFBEF;
        border: 1px solid rgb(96, 96, 96);
        
    }
    
    .borde {
        border-top: 1px solid rgb(240, 166, 70);
    }

</style>
@endpush
@section('content')
<div class="container my-2 py-2">
    <div class="row">
        <div class="col-12 text-center textshadow text-white my-5 py-5">
            <h3>Anuncios de {{__("{$user->name}")}}</h3>
        </div>
    </div>
    <div class="row mb-3">
        @foreach($ads as $ad)
        <div class="col-12 col-md-3 mb-4 revealAds">
            <div class="card card-ads rounded-0" style="width: 18rem;">
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
        <div class="card-body mb-5">
            <div class="p-4">
                <h5 class="card-title fw-bold">{{$ad->title}}</h5>
                <p class="card-text small text-muted">{{$ad->description}}</p>
                <p class="card-text text-muted small">{{$ad->price}}€</p>
            </div>
            <div class="d-flex justify-content-end borde align-items-center">
                <a href="{{route('ad.details', ['id'=>$ad->id])}}" class="btn px-4 rounded-0">DETALLE 
                    <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-3">
           <span>{{ $ads->links() }}</span> 
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    ScrollReveal().reveal('.reveal', { distance: '100px', duration: 800, interval: 500 });
    ScrollReveal().reveal('.revealAds', { duration: 600, interval: 500, scale: 0.85 });
</script>
@endpush