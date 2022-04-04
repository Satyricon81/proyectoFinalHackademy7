@extends('layouts.app')
@push('style')
<style>
    body {
        background-color: rgb(234, 239, 246);
    }
    
    .aboveImage {
        height: 100vh;
        width: 100%;
        min-height: 500px;
        background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0) 20%), url('imagenes_propias/head3.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }

    .sombraImg {
        box-shadow: 5px 5px 8px rgb(240, 166, 70);
    }

    .sobreNosotros {
        height: 500px;
        width: 100vw;
        background-image: linear-gradient(transparent, rgba(60, 58, 58, 0.619) 95%), url('/imagenes_propias/fotonueva.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card-ads {
        background-color: #FAFBEF;
        border: 1px solid rgb(96, 96, 96);

    }

    .btn-ads {
        background-color: rgb(240, 166, 70);
        font-weight: 500;
        font-size: 15px;
        color: white;
        border-radius: none;
    }

    .borde {
        border-top: 1px solid rgb(240, 166, 70);
    }

</style>
@endpush
@section('content')
<!-- contenedor above the fold -->
<div class="container-fluid text-center mb-5 py-3 aboveImage">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 ">
            <h1 class="text-white textshadow reveal d-none d-md-block">{{ __('ui.welcome') }}
                <i>RAPIDO</i>
            </h1>
            <h3 class="text-white textshadow reveal d-block d-md-none mt-5 pt-5">{{ __('ui.welcome') }}
                <i>RAPIDO</i>
            </h3>
            <p class="text-white h3 text-uppercase textshadow reveal">{{ __('ui.subwelcome') }}
            </p>
            <a class="btn botonanuncio mt-5 textshadow reveal" href="{{ route('ad.new') }}">{{ __('ui.createanewad') }}
            </a>
        </div>
    </div>
</div>



<!-- contenedor con las cards -->
<div class="container my-3 py-3">
    <!-- row con el titulo de las cards -->
    <div class="row my-3 py-3">
        <div class="col-12 text-center">
            <h2>{{ __('ui.textolord-icon') }}</h2>
        </div>
    </div>
    <!-- row my-3 py-3 con las cards -->
    <div class="row my-3 py-3">
        <!-- primera col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card cardicono border-0 p-3 reveal">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/nkmsrxys.json" trigger="loop"
                        colors="primary:#121331,secondary:#F0A646" stroke="75" style="width:100px;height:100px">
                    </lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold">{{ __('ui.lord-icon1a') }}</p>
                <p class="mb-0">{{ __('ui.lord-icon1b') }}</p>
            </div>
        </div>
        <!-- segunda col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card cardicono border-0 p-3 reveal ">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop"
                        colors="primary:#121331,secondary:#F0A646" stroke="75" style="width:100px;height:100px">
                    </lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold">{{ __('ui.lord-icon2a') }}</p>
                <p class="mb-0">{{ __('ui.lord-icon2b') }}</p>
            </div>
        </div>
        <!-- tercera col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card cardicono border-0 p-3 reveal">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/cmrzxpzz.json" trigger="loop"
                        colors="primary:#121331,secondary:#F0A646" stroke="75" style="width:100px;height:100px">
                    </lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold">{{ __('ui.lord-icon3a') }}</p>
                <p class="mb-0">{{ __('ui.lord-icon3b') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- contendor con description -->
<div class="container my-0 py-0 my-md-3 py-md-3">
    <div class="row my-3 py-3">
        <div class="col-12 col-md-6">
            <img src="/imagenes_propias/desc1.jpg" height="800" width="500"
                class="d-none d-xl-block mx-auto sombraImg reveal" alt="">
        </div>
        <div class="col-12 col-xl-6 text-center align-content-center mt-0 mt-md-5">
            <div class="reveal">
                <h3>{{ __('ui.advantages') }}</h3>
                <h4 class="py-2 fw-bold"> -{{ __('ui.slide1a') }}</h4>
                <p>{{ __('ui.slide1b') }}</p>
                <h4 class="py-2 fw-bold"> -{{ __('ui.slide2a') }}</h4>
                <p>{{ __('ui.slide2b') }}</p>
                <h4 class="py-2 fw-bold"> -{{ __('ui.slide3a') }}</h4>
                <p>{{ __('ui.slide3b') }}</p>
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn botonanuncio mt-5 textshadow reveal"
                    href="{{ route('ad.new') }}">{{ __('ui.createanewad') }}
                </a>
            </div>
        </div>
    </div>
</div>

<!-- contendor con categorias e iconos -->
<div class="container my-3 d-none d-lg-block">
    <div class="col-12 d-flex justify-content-center">
        @foreach ($categories as $category)
        <a type="button" class="btn btn-transparent mx-3 box-radius"  href="{{route('category.ads', ['name'=>$category->name, 'id'=>$category->id])}}">
            <div class="btn">
                <i class="px-2 py-2 h2 text-center {{$category->icon}}">
                <h5 class="text-center py-2 text-decoration-none"><b>{{__("ui.{$category->name}")}}</b></h5></i>
            </div>
        </a>
        @endforeach
    </div>
</div>


<!-- contenedor sobre nosotros -->
<div class="container-fluid sobreNosotros">
    <div class="row h-100 flex-column align-items-end justify-content-end">
        <div class="col-12 col-md-4 text-center">
            <div class="reveal">
                <a class="nav-link active fw-bold fs-1 text-white"
                    href="{{ route('about') }}">{{ __('ui.ourstory') }}</a>
                <a class="nav-link active fw-bold fs-3 text-white"
                    href="{{ route('contact') }}">{{ __('ui.contactus') }}</a>
            </div>
        </div>
    </div>
</div>

<!-- contenedor ultimos anuncios -->
<div class="container py-3">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h3>{{ __('ui.lastads') }}</h3>
        </div>
    </div>
    <div class="row py-1 py-md-5">
        @foreach($ads as $ad)
        <div class="col-12 col-md-3 mb-4 revealAds d-flex justify-content-center">
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
                <div class="card-body">
                    <div class="p-4">
                        <h5 class="card-title fw-bold">{{$ad->title}}</h5>
                        <p class="card-text small text-muted">{{$ad->description}}</p>
                        <p class="card-text text-muted small">{{$ad->price}}€</p>
                    </div>
                    <div class="d-flex justify-content-end borde align-items-center py-2">
                        <a href="{{route('ad.details', ['id'=>$ad->id])}}" class="btn px-4 rounded-0">DETALLE
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- calltoaction entre cards y footer -->
<div class="container-fluid d-flex justify-content-center align-items-center my-5 py-5 bg-dark" style="width: 100vw">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center text-white">
            <strong>{{ __('ui.textobotonfooter') }}</strong>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <button class="btn botonanuncio"><a class="nav-link fw-bold text-white"
                    href="{{ route('ad.new') }}">{{ __('ui.createanewad') }}</a></button>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@push('script')
<script>
    ScrollReveal().reveal('.reveal', {
        distance: '100px',
        duration: 800,
        interval: 500
    });
    ScrollReveal().reveal('.revealAds', {
        duration: 600,
        interval: 500,
        scale: 0.85
    });

</script>
@endpush
