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
</style>
@endpush
@section('content')
<div class="container my-3 py-3">
    <div class="row my-3 py-3">
        <div class="col-12 text-center textshadow text-white ">
            <h3>{{ __('ui.createanewadview') }}</h3>
        </div>
        <div class="container my-3 py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card neomorphInput border-0">
                        <form method="POST" action='{{route("ad.create")}}'>
                            @csrf
                            <div class="row p-md-5">
                                <div class="col-6">
                                    <div class="card-header d-none">
                                        Nuevo anuncio (Secret: {{$uniqueSecret}})
                                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="adName">{{ __('ui.newad1') }}</label>
                                        <input type="text" class="form-control rounded-0 border-0" id="adName"
                                            name="title" value="{{old('title')}}">
                                    </div>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3 text-bold">
                                        <label for="form-label" class="my-2">{{ __('ui.newad2') }}</label>
                                        <select class="form-control rounded-0 border-0" id="categories"
                                            name="category_id">
                                            @foreach($categories ?? '' as $category)
                                            <option value="{{$category->id}}"
                                                {{old('category') == $category->id ? 'selected' : ''}}>
                                                {{__("ui.{$category->name}")}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="adPrice">{{ __('ui.newad3') }}</label>
                                        <input type="number" step="0.01" class="form-control rounded-0 border-0"
                                            id="adPrice" aria-describedby="priceHelp" name="price"
                                            value="{{old("price")}}">
                                        @error('price')
                                        <small id="priceHelp" class="form-text"
                                            style="color:red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="adBody">{{ __('ui.newad4') }}</label>
                                        <textarea class="form-control rounded-0 border-0" name="description" id="adBody"
                                            cols="30" rows="3">{{old('description')}}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="adImages" class="form-label">{{ __('ui.newad5') }}</label>
                                        <div class="dropzone d-flex align-items-center justify-content-center" id="drophere"></div>
                                        @error('images')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                    <div>
                                        <img src="/imagenes_propias/createANewAd.png" width="400" alt="">
                                    </div>
                                    <button type="submit" class="btn botonanuncio mt-5">{{ __('ui.newadbutton') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
