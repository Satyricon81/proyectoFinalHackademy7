{{-- @extends('layouts.app')
@section('content')
<div class="container mb-5 py-3">
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{ __('ui.loginview') }}</h1>
        </div>
    </div>
</div>
<div class="container my-2 py-2">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary my-2">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
 --}}

 @extends('layouts.app')
@push('style')
<style>
    .neomorphInput {
        border-radius: 50px;
        background: #ddf0ff;
        box-shadow:  20px 20px 60px #bcccd9,
                    -20px -20px 60px #feffff;
    }
    

    .head {
        height: 100vh;
        width: 100%;
    }
</style>
@endpush
@section('content')

<div class="container head">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-12 col-md-4 text-center">
            <h3 class="text-white textshadow mb-4">{{ __('ui.loginview') }}</h3>
            <form action="{{ route('login') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('ui.emailform')}}</label>
                    <input type="email" name="email" class="form-control neomorphInput border-0" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{ __('ui.passwordform')}}</label>
                    <input type="password" name="password" class="form-control neomorphInput border-0" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn botonanuncio my-2">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
