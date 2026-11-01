$(document).ready(function() {
    // Toggle active class in navbar
    $('.nav-link').on('click', function() {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // Smooth scroll to anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    });

    // Example: Show a message on footer link hover
    $('footer a').hover(function() {
        var text = $(this).text();
        $(this).append('<span class="tooltip">' + text + '</span>');
    }, function() {
        $('.tooltip').remove();
    });
});

