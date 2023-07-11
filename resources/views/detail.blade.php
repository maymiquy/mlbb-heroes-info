
@extends('layouts.app')

@section('content')
    <div class="detail-hero py-5">
        {{-- <div class="produk-title text-center mx-auto p-1 wow fadeInUp mt-2 mb-5 bg-dark">
            <h2 class="text-white m-2">
                Detail Produk
            </h2>
        </div> --}}
        <div class="container">
            <div class="container-detail row mt-3 py-5 px-3 rounded-3 shadow-xl">
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
        </div>
    </div>
@endsection
