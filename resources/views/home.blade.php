<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold cineplex - Your Movie Ticket Destination</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
 </head>  
<body>
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Gold Cineplex Logo">
                <h1>Gold Cinplex</h1>
            </a>
        </div>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Movies</a>
        <a href="#">Book Tickets</a>
        <a href="#">Contact</a>
    </nav>
    <main>
        <section class="hero">
            <div class="container"><br><br>
                <br><h2>Catch the Latest Blockbusters Now!</h2> 
                <p>Book your tickets now and experience the magic of movies on the big screen.</p>
                <a href="#" class="btn">Book Tickets</a>
            </div>
        </section>
               <div class="container">
                <h2>Now Showing</h2>
                
                <ul class="movie-list">
                    <li>
                        
                            <img src="{{ asset('images/movie1.jpg') }}" height="250px" width="300px" alt="Movie Poster 1">
                            <p>Movie:Boss Baby</p>
                            <p>Genre:Family</p>
                            <p>Rating:4.5/5</p>

                        </a>
                    </li>
                    <li>
                            <img src="{{ asset('images/movie2.jpg') }}" height="250px" width="300px" alt="Movie Poster 2">
                            <p>Movie:The Sea Beast</p>
                            <p>Genre:Family/Comedy</p>
                            <p>Rating:4.7/5</p>
                        </a>
                    </li>
                    <li>
                      
                            <img src="{{ asset('images/movie3.jpeg') }}" height="250px" width="300px" alt="Movie Poster 3">
                            <p>Movie:65</p>
                            <p>Genre:Action</p>
                            <p>Rating:3.8/5</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="why-Gold Cineplex">
            <h2>Why Choose Gold Cineplex?</h2>
            <div class="container">
                <table>
                    <tr>
                        <th>Convenience</th>
                        <td>Book tickets online anytime, anywhere.</td>
                    </tr>
                    <tr>
                        <th>Selection</th>
                        <td>Wide variety of movies to choose from.</td>
                    </tr>
                    <tr>
                        <th>Best Seats</th>
                        <td>Pick your preferred seats with our interactive seat map.</td>
                    </tr>
                    <tr>
                        <th>Exclusive Offers</th>
                        <td>Enjoy discounts and promotions on tickets and concessions.</td>
                    </tr>
                </table>
            </div>
        </section>

    </main>
        <footer>
           <div class="container">
                <p>&copy; Gold cineplex 2024. All Rights Reserved.</p>
           </div>
        </footer>
      </body>
</html>