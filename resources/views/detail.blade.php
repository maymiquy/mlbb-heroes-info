@extends('layouts.app')

@section('content')
    <section class="detail-hero p-5">
        <a href="/" class="btn btn-md bg-gold fw-bold my-3"><i class="bi bi-arrow-left me-1"></i>Back</a>
        <div class="row">
            <div class="container-detail col-lg-10  row py-5 px-3 rounded-3 shadow-xl">
                <div class="col-md-5 px-5">
                    <div class="img-fluid rounded-3 shadow-xl"
                        style="background-image: url({{ asset('assets/img/' . $hero->poster) }})">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-description px-5 d-grid justify-content-evenly">
                        <h2 class="bold my-3 text-white text-shadow">
                            {{ $hero->name }}
                        </h2>
                        <div class="product-details my-4 text-shadow">
                            <p class="description text-white fw-bolder fs-6">{{ $hero->description }}</p>
                        </div>
                        <div class="btn-group d-flex justify-content-between">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->role->name }}</button>
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->weapon }}</button>
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->specialty->name }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="container-random d-none d-lg-block">
                <div class="card aside rounded-3">
                    <div class="card-header bg-dark">
                        <p class="card-title text-white text-center fw-bolder"> Recomended</p>
                    </div>
                    <div class="card-body recom">
                        <ul class="category">
                            @foreach ($randomheroes as $rhero)
                                <li class="my-3">
                                    <div class="back-recomend"
                                        style="background-image: url('/assets/img/{{ $rhero->poster }}'); background-size:cover; background-position-y: center; background-repeat: no-repeat;">
                                        <div class="img-recomend">
                                            <h4 class="card-title font-monospace">
                                                {{ $rhero->name }}
                                            </h4>
                                            <hr>
                                            <a href="{{ route('heroes.detail', $rhero->id) }}"
                                                class="btn bg-gold fw-bolder btn-sm mt-4">Detail
                                                Hero
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
