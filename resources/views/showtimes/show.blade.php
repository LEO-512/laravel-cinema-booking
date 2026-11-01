@extends('layouts.app')

@section('content')
    <h1>{{ $showtime->movie->title }}</h1>
    <p>{{ $showtime->showtime }}</p>

    <h2>Seats</h2>
    <p>{{ $seats->count() }} seats available for this showing.</p>

    <a class="btn" href="{{ route('show.seats', $showtime) }}">Choose seats</a>
@endsection
