@extends('layouts.base')

@section('pageTitle', '{{$destination->city}}')

@section('mainContent')
    <h1 class="text-center my-4">{{$destination->city}}</h1>
    <h4>{{$destination->city}} si trova in {{$destination->state}}</h4>
    <p>Breve descrizione del viaggio proposto: <br> {{$destination->description}}</p>
    <img src="{{$destination->image}}" alt="$destination->city" class="mb-3">
    <p>Quando si parte?</p>
    <ul>
        <li>Il {{$destination->departure_date}}</li>
    </ul>
    <p>Quando si torna?</p>
    <ul>
        <li>Il {{$destination->return_date}}</li>
    </ul>
    <p>Quanto costa?</p>
    <ul>
        <li>€ {{$destination->price}} a persona</li>
    </ul>
    <a href="{{route('destinations')}}">Torna alle destinazioni</a>
@endsection