<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Seat;
use App\Models\Showtime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with demo movies, showtimes and seats.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'Boss Baby',
                'description' => 'A suit-wearing baby and his big brother team up to stop a plot against puppy love.',
                'genre' => 'Family',
                'duration' => '97 min',
                'rating' => '4.5/5',
            ],
            [
                'title' => 'The Sea Beast',
                'description' => 'A young stowaway joins a legendary monster hunter on an adventure across the seas.',
                'genre' => 'Family / Comedy',
                'duration' => '115 min',
                'rating' => '4.7/5',
            ],
            [
                'title' => '65',
                'description' => 'A pilot crashes on an unknown planet and must fight to survive.',
                'genre' => 'Action',
                'duration' => '93 min',
                'rating' => '3.8/5',
            ],
        ];

        foreach ($movies as $index => $data) {
            $movie = Movie::create($data);

            $showtime = Showtime::create([
                'movie_id' => $movie->id,
                'showtime' => now()->addDays($index + 1)->setTime(19, 0),
            ]);

            for ($number = 1; $number <= 40; $number++) {
                Seat::create([
                    'showtime_id' => $showtime->id,
                    'seat_number' => $number,
                    'is_booked' => false,
                ]);
            }
        }
    }
}
