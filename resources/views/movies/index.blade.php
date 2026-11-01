@extends('layouts.app')

@section('content')
    <ul>
    <h1>Now Showing</h1>
        @foreach($movies as $movie)
            <li><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection