<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rápido.es</title>
    @stack('style')
</head>
<body>
    @include('layouts._nav')
    @if(session('access.denied.revisor.only'))
    <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
    @endif 
    @if(session('message'))
    <div class="alert alert-info">{{session('message')}}</div>
    @endif 
    @yield('content') 
   

    @include('layouts._footer')
    {{-- <div style="margin-top: 3000px;"> --}}
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    @stack('script')
</body>
</html>