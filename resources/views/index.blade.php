@extends('layouts.app')

@section('content')

    <section class="hero-wrapper h-50">
        <div class="news-item hero-item">
        </div>
        <div class="news-item standard-item">
        </div>
        <div class="news-item standard-item">
        </div>
        <div class="news-item standard-item">
            <video autoplay muted loop>
                <source src="../assets/vid/anima-1.mp4" type="video/mp4">
            </video>
        </div>
        <img src="../assets/img/logo-nmlbb.png" alt="logo mlbb" class="logo w-25">
    </section>

    <section id="guides" class="homeA">
        <div class="news-title justify-center mx-auto my-5">
            <h1 class="text-white text-shadow text-center fw-semibold">Guides & News</h1>
        </div>

        <div class="container">
            <div class="homeB wow">
                <div class="hSwiper1 a-fadeinB2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/27.html">
                                    <div class="img"><img src="../assets/img/news-onic.jpg" width="100%" />
                                    </div>
                                    <!-- <div class="top"><span class="d">2023/06/28</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">ONIC ID takes the globe by storm to
                                            become the
                                            MSC 2023
                                            Champion
                                        </p>
                                        <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/15.html">
                                    <div class="img"><img src="../assets/img/news-onic.jpg" width="100%" />
                                    </div>
                                    <!-- <div class="top"><span class="d">2023/02/20</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">MPL Singapore is back with teams looking
                                            to
                                            replay, and reset
                                        </p>
                                        <span href=""
                                            class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/14.html">
                                    <div class="img"><img src="../assets/img/news-echo.png" width="100%" />
                                    </div>
                                    <!-- <div class="top"><span class="d">2023/01/30</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">ECHO shows that they are made of
                                            greatness in the
                                            M4 World
                                            Championship!
                                        </p>
                                        <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/13.html">
                                    <div class="img"><img src="../assets/img/news-onic.jpg" width="100%" />
                                    </div>
                                    <!-- <div class="top"><span class="d">2023/01/30</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">First-ever M Summit Jakarta brings
                                            together
                                            esports and gaming
                                            industry
                                            experts</p>
                                        <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/12.html">
                                    <div class="img"><img src="../assets/img/news-onic.jpg" width="100%" />
                                    </div>
                                    <!-- <div class="top"><span class="d">2022/11/25</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">MOONTON Games and Garudaku Academy
                                            partner up to
                                            enhance
                                            education for
                                            Indonesia&rsquo;s esports ecosystem</p>
                                        <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="homeB-a">
                                <a href="/news/11.html">
                                    <div class="home-img"><img src="../assets/img/news-black.jpg" class="img"
                                            width="100%" /></div>
                                    <!-- <div class="top"><span class="d">2022/11/11</span> <span class="tag">News</span></div> -->
                                    <div class="homeB-e">
                                        <p class="t card-text text-shadow">Blacklist International reclaims their
                                            MPL
                                            Philippines Crown
                                        </p>
                                        <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainQh swiper-button-next"></div>
                <div class="mainQh swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section id="hero" class="container-heroes p-5">
        <div class="hero-title text-center px-1 mx-auto mb-5">
            <h2 class="text-white text-shadow fw-bold">
                List Hero
            </h2>
        </div>
        <div class="wrapper-card my-5">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-2">
                @foreach ($heroes as $hero)
                    <div class="cols">
                        <div class="col" ontouchstart="this.classList.toggle('hover');">
                            <div class="container-card">
                                <div class="front" style="background-image: url(/assets/img/{{ $hero->poster }}">
                                    <div class="inner">
                                        <p>{{ $hero->name }}</p>
                                        <span>Tap for details</span>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="inner">
                                        <h4 class="card-title font-monospace">
                                            {{ $hero->name }}
                                        </h4>
                                        <hr>
                                        <p class="card-text fw-bolder description">
                                            {{ $hero->description }}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center my-1">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->role->name }}</button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $hero->weapon }}</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $hero->specialty->name }}</button>
                                            </div>
                                        </div>
                                        <hr class="text-dark">
                                        <a href="{{ route('heroes.detail', $hero->id) }}"
                                            class="btn btn-lg btn-warning mt-4">Detail
                                            Hero
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
