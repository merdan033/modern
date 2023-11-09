<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('home') }}">@lang('app.appName')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-translate"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('locale', 'tm') }}">Türkmen</a></li>
                        <li><a class="dropdown-item" href="{{ route('locale', 'en') }}">English</a></li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                            Logout {{ $user->name }}
                        </a>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm">
                            @csrf
                            @honeypot
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link link-danger" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('register') }}">
                            Register
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
