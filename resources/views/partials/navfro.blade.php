<nav class="navbar navbar-expand-lg" id="navbar">>
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#"><img id="MDB-logo"
          src="https://thumb.viva.co.id/media/frontend/thumbs3/2020/07/07/5f03d7aa9081d-bermain-mobile-legends-bersama-anak_665_374.jpg" alt="MDB Logo"
          draggable="false" height="30" /></a>
  
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-3">
          <button class="nav-item" style="border-radius: 10px; height: 3em;">
              <a class="nav-link active d-flex align-items-center" aria-current="page" href="/">
                Menu
              </a>
            </button>
        </ul>
        <!-- Left links -->
  
        <form class="d-flex align-items-center w-100 form-search">
          <div class="input-group">
            <button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown"
              aria-expanded="false" style="padding-bottom: 0.4rem;">
              All
            </button>
            <ul class="dropdown-menu dropdown-menu-dark fa-ul">
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search"></i></span>All</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                      class="fas fa-film"></i></span>Titles</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-tv"></i></span>TV
                  Episodes</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                      class="fas fa-user-friends"></i></span>Celebs</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                      class="fas fa-building"></i></span>Companies</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                      class="fas fa-key"></i></span>Keywords</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                      class="fas fa-search-plus"></i></span>Advanced
                  search<i class="fas fa-chevron-right ps-2"></i></a>
              </li>
            </ul>
            <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
          </div>
          <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
        </form>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <button class="nav-item" style="border-radius: 10px; height: 3em;">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </button>
                @endif

                @if (Route::has('register'))
                <button class="nav-item" style="border-radius: 10px; height: 3em;">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </button>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->role === "admin")
                        <a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard Admin</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
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
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->