@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Duration: {{ $movie->duration }}</p>
    <p>Rating: {{ $movie->rating }}</p>

    <h2>Showtimes</h2>
    <ul>
        @foreach($movie->showtimes as $showtime)
            <li><a href="{{ route('showtimes.show', $showtime) }}">{{ $showtime->showtime }}</a></li>
        @endforeach
    </ul>
@endsection