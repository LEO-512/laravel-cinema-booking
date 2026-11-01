<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $seats = Seat::all();
        return view('booking', compact('movies', 'seats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'seats' => 'required|array',
            'showtime' => 'required|date',
        ]);

        foreach ($request->seats as $seat_id) {
            Booking::create([
                'movie_id' => $request->movie_id,
                'seat_id' => $seat_id,
                'showtime' => $request->showtime,
            ]);
        }

        return redirect()->back()->with('success', 'Booking successful!');
    }
}