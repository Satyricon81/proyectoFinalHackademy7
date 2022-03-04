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

<div class="container py-5 my-5">
    <div class="row h-100 justify-content-center align-items-center py-3 my-3">
        <div class="col-12 col-md-6">
            <img src="imagenes_propias/fotoaboutus.jpg" height="700" width="500"
            class="d-block mx-auto sombraImg reveal" alt="">
        </div>
        <div class="col-12 col-md-6 text-center align-content-center">
            <div class="reveal">
                <h3 class="text-white textshadow mb-4">{{ __('ui.aboutusview') }}</h3>
                <p class="fs-4 fw-bold">{{ __('ui.aboutusdescription') }}</p>
                <p class="fs-4 fw-bold">{{ __('ui.aboutusdescription1') }}</p>
                
            </div>
        </div>
    </div>
</div>
@endsection
