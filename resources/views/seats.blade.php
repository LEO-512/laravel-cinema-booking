@extends('layouts.app')

@section('content')
    <h1>Select Seats</h1>

    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <form action="{{ route('seats.update') }}" method="POST">
        @csrf

        <input type="hidden" name="showtime_id" value="{{ $showtimeId }}">

        <ul class="seat-list">
            @foreach($seats as $seat)
                <li>
                    <label>
                        <input type="checkbox"
                               name="seats[]"
                               value="{{ $seat->id }}"
                               {{ $seat->is_booked ? 'disabled' : '' }}>
                        Seat {{ $seat->seat_number }}
                        @if($seat->is_booked)
                            <strong>(booked)</strong>
                        @endif
                    </label>
                </li>
            @endforeach
        </ul>

        <button type="submit">Book Selected Seats</button>
    </form>
@endsection
