<footer class="footer">
    <div class="container">
        <p>&copy; {{ date('Y') }} Cinex. All rights reserved.</p>
        <nav class="footer-nav">
            <ul>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
            </ul>
        </nav>
    </div>
</footer>
<script src="{{ asset('js/custom.js') }}"></script>
</html>