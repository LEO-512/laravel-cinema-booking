<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Show the seat map for a given showtime.
     */
    public function show($showtimeId)
    {
        $seats = Seat::where('showtime_id', $showtimeId)
            ->orderBy('seat_number')
            ->get();

        return view('seats', compact('seats', 'showtimeId'));
    }

    /**
     * Mark the selected seats as booked.
     */
    public function update(Request $request)
    {
        $request->validate([
            'showtime_id' => 'required|integer|exists:showtimes,id',
            'seats' => 'required|array',
            'seats.*' => 'integer|exists:seats,id',
        ]);

        Seat::whereIn('id', $request->seats)
            ->where('showtime_id', $request->showtime_id)
            ->where('is_booked', false)
            ->update(['is_booked' => true]);

        return redirect()
            ->route('show.seats', $request->showtime_id)
            ->with('success', 'Seats booked successfully.');
    }
}
