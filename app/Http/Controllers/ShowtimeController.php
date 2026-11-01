<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::with('movie')->get();
        return view('showtimes.index', compact('showtimes'));
    }

    public function show(Showtime $showtime)
    {
        $seats = $showtime->seats;
        return view('showtimes.show', compact('showtime', 'seats'));
    }
}