<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        {{-- <a class="navbar-brand" href="#">Klinik </a> --}}
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- biar ke kanan navbar --}}
            <ul class="mr-auto navbar-nav"></ul>
            <ul class="navbar-nav">
                <li class="nav-item {{ $active === 'home' ? 'active' : '' }}" id="home">
                    <a class="nav-link" href="{{ route('home.index') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $active === 'about' ? 'active' : '' }}" id="about">
                    <a class="nav-link" href="{{ route('home.about') }} ">About</a>
                </li>
                <li class="nav-item" id="login">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
