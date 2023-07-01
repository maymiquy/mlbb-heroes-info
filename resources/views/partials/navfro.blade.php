    <nav class="navbar navbar-expand-lg sticky-top px-5 border-black shadow" id="navbar">
        <a class="navbar-brand" href="#">
            <img id="MLBB-Heroes" src="{{ asset('/assets/img/logo-mlbb.png') }}" alt="MLBB-Heroes" draggable="false" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link fw-bold text-white text-shadow" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white text-shadow" href="#produk">Heroes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white text-shadow" href="#tentang">Guides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white text-shadow" href="#footer">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item my-auto mx-1">
                            <a class="nav-link btn btn-success text-white border-dark mx-1"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item mx-1">
                            <a class="nav-link btn btn-primary text-white border-dark mx-1"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->role === 'admin')
                                <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard Admin</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
