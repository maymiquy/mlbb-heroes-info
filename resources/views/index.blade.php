@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are a User.
    </div>
    <h1 class="mt-4">halaman User</h1>
    <div class="row">
        @foreach ($heroes as $hero)
        <div class="col-sm-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top img-fluid product-image" src="/assets/img/{{ $hero->poster }}"
                    alt="Card image cap">
                <div class="card-block">

                    <hr>
                    <h4 class="card-title text-center mt-1 "><a href="#" class="text-decoration-none text-primary">
                            {{ $hero->name }}
                        </a>
                    </h4>
                    <div class="team-contact-info">
                        <div class="text-center">
                            <span class="text-decoration-line-through text-muted">Rp.
                                {{ $hero->price*1.5 }}
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
</div>
@endsection