
@extends('layouts.app')

@section('content')
<a href="/" class="btn bg-gold btn-secondary m-3 text-sm text-shadow text-white"><i class="bi bi-arrow-left"></i>Back</a>
<section id="hero" class="container-heroes p-5" style="margin-top:-70px">
    <div class="hero-title text-center px-1 mx-auto mb-5">
        <h2 class="text-white text-shadow fw-bold">
            List Hero
        </h2>
    </div>
    <div class="wrapper-card my-5">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <form class="form" method="get" action="{{ route('search') }}#result">
                    <div class="form-group w-100 mb-3" id="result">
                        <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                            placeholder="Find Hero..." style="font-size:11pt;">
                        <button type="submit" class="btn btn-primary mb-1"><i class="bi bi-search text-gold"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-5">
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
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->role->name }}</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $hero->specialty->name }}</button>
                                    </div>
                                </div>
                                <a href="{{ route('heroes.detail', $hero->id) }}"
                                    class="btn btn-warning mt-4">Detail
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
