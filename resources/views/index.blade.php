@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet" />
    <div class="container">

        {{-- @if (Auth::user()->role === 'admin')
    <div class="card-body">
        Role: {{ Auth::user()->role }}
    </div>
    @endif --}}
        <div class="produk-title text-center mx-auto p-1 wow fadeInUp mb-5 bg-dark">
            <h2 class="text-white m-2">
                PRODUK
            </h2>
        </div>
        <div class="row">
            @foreach ($heroes as $hero)
                <div class="col-sm-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top img-fluid product-image" src="/assets/img/{{ $hero->poster }}"
                            alt="Card image cap">
                        <div class="card-block">

                            <hr>
                            <h4 class="card-title text-center mt-1 "><a href="#"
                                    class="text-decoration-none text-primary">
                                    {{ $hero->name }}
                                </a>
                            </h4>
                            <div class="team-contact-info">
                                <div class="text-center">
                                    <span class="text-decoration-line-through text-muted">Rp.
                                        {{ $hero->price * 1.5 }}
                                    </span>
                                    Rp.
                                    {{ $hero->price }}
                                </div>
                                <div class="row m-4">
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                @foreach ($heroes as $hero)
                <div class="cols">
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(/assets/img/{{ $hero->poster }}">
                                <div class="inner">
                                    <p>{{ $hero->name }}</p>
                                    <span>Tap for details</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h4 class="card-title">
                                    <p>{{ $hero->name }}</p></h4><hr>
                                    <p class="card-text">Genre: {{  $hero->name }}</p>
                                    <p class="card-text">Rating: {{  $hero->name }} &#11088;</p>
                                    <p class="card-text">Tahun: {{  $hero->name }}</p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">{{ $movie->negara }}</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">{{ $movie->genre->nama }}</button>
                                        </div>
                                        <small class="text-body-secondary">{{ $movie->rating }}/10</small>
                                    </div> --}}
                                    <hr class="text-dark">
                                    <a href="/{{ $hero->id }}/detail" class="btn btn-lg btn-warning mt-4">Detail Hero</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
