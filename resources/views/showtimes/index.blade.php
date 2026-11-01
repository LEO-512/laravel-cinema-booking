@extends('layouts.app')

@section('content')
    <h1>Showtimes</h1>
    <ul>
        @foreach($showtimes as $showtime)
            <li><a href="{{ route('showtimes.show', $showtime) }}">{{ $showtime->movie->title }} - {{ $showtime->showtime }}</a></li>
        @endforeach
    </ul>
@endsection