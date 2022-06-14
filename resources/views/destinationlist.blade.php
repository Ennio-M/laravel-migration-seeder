@extends('layouts.base')

@section('pageTitle', 'Tutte le destinazioni')

@section('mainContent')
    <h1 class="text-center my-4">Tutte le destinazioni</h1>
    <div class="row gy-4">
        @foreach ($destinations as $destination)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{$destination->image}}" class="card-img-top" alt="{{$destination->city}}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{route('detail', $destination->id)}}">{{$destination->city}}</a></h5>
                        <p class="card-text">{{$destination->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{route('home')}}">Torna alle home</a>
@endsection