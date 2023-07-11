    <nav class="navbar navbar-expand-lg sticky-top px-5 shadow" id="navbar">
        <a class="navbar-brand" href="">
            <img id="MLBB-Heroes" src="{{ asset('/assets/img/logo-nmlbb.png') }}" alt="MLBB-Heroes" width="100"
                class="img-brand" draggable="false" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link fw-bold text-gold text-shadow" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-gold text-shadow" href="#guides">Guides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-gold text-shadow" href="#hero">Heroes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-gold text-shadow" href="#footer">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item my-auto mx-1">
                            <a class="nav-link btn btn-success text-white border-dark mx-1" href="#"
                                data-bs-toggle="modal" data-bs-target="#loginModal">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item mx-1">
                            <a class="nav-link btn btn-primary text-white border-dark mx-1" href="#"
                                data-bs-toggle="modal" data-bs-target="#registerModal">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle fs-6 fw-bold text-gold" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->role === 'admin')
                                <a class="dropdown-item fw-bolder" href="{{ route('admin.home') }}">Dashboard Admin</a>
                            @endif

                            <a class="dropdown-item fw-bolder" href="{{ route('logout') }}"
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
