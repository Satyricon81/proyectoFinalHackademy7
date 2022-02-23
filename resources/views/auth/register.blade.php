{{-- @extends('layouts.app')
@section('content')
<div class="container mb-5 py-3">
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{ __('ui.registerview') }}</h1>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="exampleInputPassword1"
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary my-2">Register</button>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')
@push('style')
<style>
    .neomorphInput {
        border-radius: 50px;
        background: #ddf0ff;
        box-shadow: 20px 20px 60px #bcccd9,
            -20px -20px 60px #feffff;
    }

    .head {
        height: 100vh;
        width: 100%;
    }

</style>
@endpush
@section('content')
<div class="container mb-5 py-3 head">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-4 text-center">
            <h3 class="text-white textshadow mb-4">{{ __('ui.registerview') }}</h3>
            <form action="{{ route('register') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{ __('ui.registername') }}</label>
                    <input type="text" name="name" class="form-control neomorphInput border-0"
                        id="exampleInputPassword1" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{ __('ui.registerlastname') }}</label>
                    <input type="text" name="lastname" class="form-control neomorphInput border-0"
                        id="exampleInputPassword1" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('ui.registeremail') }}</label>
                    <input type="email" name="email" class="form-control neomorphInput border-0" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{ __('ui.registerpass') }}</label>
                    <input type="password" name="password" class="form-control neomorphInput border-0"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{ __('ui.registerconfirmpass') }}</label>
                    <input type="password" name="password_confirmation" class="form-control neomorphInput border-0"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn botonanuncio my-2">{{ __('ui.registerbtn') }}</button>
                </div>

            </form>
            @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>



    </div>
</div>
@endsection
