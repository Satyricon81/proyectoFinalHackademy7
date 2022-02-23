@extends('layouts.app')
@section('content')
@if($ad)
<div class='container my-5 py-5'>
    <div class='row'>
        <div class='col-12 my-3 py-3'>
            <div class="card">
                <div class="card-header">
                    AD #{{$ad->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>User & Email</h4>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}}
                            {{$ad->user->name}}
                            {{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Title</h4>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Description</h4>
                        </div>
                        <div class="col-md-9">
                            {{$ad->description}}
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($ad->images as $image)
                        <div class="row md-2">
                            <div class="col-md-4">
                                <img src="{{$image->getUrl(300,150)}}" alt="" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                                Adult : {{ $image->adult}} <br>
                                spoof : {{ $image->spoof}} <br>
                                medical : {{ $image->medical}} <br>
                                violence : {{ $image->violence}} <br>
                                racy : {{ $image->racy}} <br>
                                <b>Labels</b><br>
                                <ul>
                                    @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                    <li>{{$label}}</li>
                                    @endforeach
                                    @endif
                                </ul>
                                {{ $image->id}} <br>
                                {{ $image->file}} <br>
                                {{ Storage:: url($image->file)}} <br>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-3 py-3">
        <div class="col-md-6">
            <form action="{{route('revisor.ad.accept',['id'=>$ad->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Accept</button>
            </form>
        </div>
        <div class="col-md-6 text-right">
            <form action="{{route('revisor.ad.reject',['id'=>$ad->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Reject</button>
            </form>
        </div>
    </div>
</div>
@else
<h3 class="text-center my-5 py-5">There are no ads to revise.</h3>
@endif
@endsection
