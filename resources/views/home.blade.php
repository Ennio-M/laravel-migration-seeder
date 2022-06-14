@extends('layouts.base')

@section('pageTitle', 'Home page')

@section('mainContent')
    <main class="text-center">
        <h1>Benvenuto in Boolean Travel Agency!</h1>
        <a href="{{route('destinations')}}">Scopri tutte le nostre destinazioni!</a>
    </main>
@endsection