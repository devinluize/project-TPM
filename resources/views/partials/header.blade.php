<nav id="navbar">
    <div class="container">
        <div class="nav-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="logo">
            </a>
        </div>
        <div class="nav-menu">
            <div class="nav-link">
                <a href="{{ route('home') }}" class="active">Home</a>
                <a href="#">Champion Prize</a>
                <a href="#">Mentor & Juri</a>
                <a href="#">About</a>
                <a href="#">FAQ</a>
                <a href="#">Timeline</a>
            </div>
            <div class="nav-btn">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</nav>
