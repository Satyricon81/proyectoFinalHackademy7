@extends('layouts.app')
@push('style')
<style>
    .neomorphInput {
        border-radius: 50px;
        background: #ddf0ff;
        box-shadow: 20px 20px 60px #bcccd9,
        -20px -20px 60px #feffff;
    }
    body {
        background-color: rgb(222, 229, 240);
    }
    
    .head {
        height: 100vh;
        width: 100%;
    }

    .sombraImg {
        box-shadow: 5px 5px 8px rgb(240, 166, 70);
    }
</style>
@endpush
@section('content')
<div class="container d-flex my-3 py-3">
    <div class="row my-3 py-3 ">
        <h3 class="text-white textshadow my-5 py-5 text-center">{{ __('ui.contactview') }}</h3>
        <div class="col-12 d-flex justify-content-center col-md-4 mb-5">
            <div class="card" style="width: 18rem; height: 10rem;">
                <div class="card-body sombraImg">
                    <i class="fa-solid fa-envelope fs-3"></i>
                    <p class="card-text">{{ __('ui.email') }}</p>
                    <a href="mailto:rapido@rapidosa.es">rapido@rapidosa.es</a>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center col-md-4 mb-5">
            <div class="card" style="width: 18rem; height: 10rem;">
                <div class="card-body sombraImg">
                    <i class="fa-solid fa-phone fs-3"></i>
                    <p class="card-text">{{ __('ui.telefono') }}</p>
                    <a href="">+34 699876532</a>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center col-md-4 mb-5">
            <div class="card" style="width: 18rem; height: 10rem;">
                <div class="card-body sombraImg">
                    <i class="fa-brands fa-discord fs-3"></i>
                    <p class="card-text">{{ __('ui.discord') }}</p>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection