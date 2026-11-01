<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movie Booking ')</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo"><a href="{{ url('/') }}">Cinex</a></h1>
            <nav class="nav">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('movies.index') }}">Movies</a></li>
                    <li><a href="{{ route('showtimes.index') }}">Showtimes</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="content">
        <div class="container">
            @yield('content')
        </div>
    </main>