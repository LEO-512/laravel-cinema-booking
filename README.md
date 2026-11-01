# Cinex — Cinema Ticket Booking

![Cinex banner](images/banner.jpg)

A Laravel 9 web application for browsing movies, picking a showtime and reserving seats in a cinema. Built as a university project and kept here as a portfolio piece.

## Features

- Browse the movies currently showing
- View showtimes for each movie
- Interactive seat map with already-booked seats disabled
- Seat reservations stored in a MySQL database
- Demo data seeder so the app looks populated on first run

## Tech stack

| Layer | Technology |
|---|---|
| Framework | Laravel 9 |
| Language | PHP 8.0+ |
| Database | MySQL |
| Frontend | Blade templates, plain CSS and JavaScript |
| Build tool | Vite |

## Project structure

```
app/                 Controllers and Eloquent models
config/              Laravel configuration
database/migrations  Movies, showtimes, seats and bookings tables
database/seeders     Demo data
images/              Movie posters and logo used by the views
public/              Web root: CSS, JS and index.php
resources/views      Blade templates
routes/web.php       Application routes
```

## Getting started

### Prerequisites

- PHP 8.0 or newer with the `pdo_mysql` extension
- Composer
- MySQL (XAMPP, Laragon or a local server all work)
- Node.js 16+ (only needed if you want to rebuild the assets)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/LEO-512/laravel-cinema-booking.git
   cd laravel-cinema-booking
   ```

2. Install the PHP dependencies:

   ```bash
   composer install
   ```

3. Create your environment file and application key:

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

4. Create an empty MySQL database called `cinex`, then set your credentials in `.env`:

   ```env
   DB_DATABASE=cinex
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Create the tables and load the demo data:

   ```bash
   php artisan migrate --seed
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

7. Open <http://localhost:8000> in your browser.

## Routes

| Method | URI | Description |
|---|---|---|
| GET | `/` | Landing page |
| GET | `/movies` | List of movies |
| GET | `/movies/{movie}` | Movie details and showtimes |
| GET | `/showtimes` | All showtimes |
| GET | `/showtimes/{showtime}` | Single showtime |
| GET | `/showtimes/{showtime}/seats` | Seat map |
| POST | `/seats/update` | Book the selected seats |

## Known limitations

- There is no authentication yet, so bookings are not tied to a user account.
- The `BookingController` and `resources/views/show.blade.php` are leftovers from an earlier draft of the booking flow and are currently unused.
- Seat reservations are first-come-first-served; there is no payment step.

## License

Released under the [MIT License](LICENSE).

## Author

**Lareb Malik** — [github.com/LEO-512](https://github.com/LEO-512)
