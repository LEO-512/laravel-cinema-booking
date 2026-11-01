@extends('layouts.app')

@section('content')
    <h1>Booking Confirmation</h1>
    <p>Booking ID: {{ $booking->id }}</p>
    <p>Showtime: {{ $booking->showtime->showtime }}</p>
    <p>Total Amount: {{ $booking->total_amount }}</p>
@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/book" method="POST">
            @csrf
            <div class="form-group">
                <label for="movie">Movie</label>
                <select name="movie_id" id="movie" class="form-control">
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="showtime">Showtime</label>
                <input type="datetime-local" name="showtime" id="showtime" class="form-control"> value="{{ $showtime->id }}">
            </div>
            <div class="form-group">
                <label>Seats</label>
                <div class="row">
                    @foreach($seats as $seat)
                        <div class="col-1">
                            <label>
                                <input type="checkbox" name="seats[]" value="{{ $seat->id }}"> {{ $seat->seat_number }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
    </div>
</body>
</html>