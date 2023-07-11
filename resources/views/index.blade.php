@extends('layouts.app')

@section('content')
<h1 class="text-white">Heroes</h1>

<hr>


<div class="wrapper-card" id="heroes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="input-group">
                        <input class="form-control search-hero" type="search" placeholder="Search Hero..." aria-label="Search" name="search">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr class="text-white">
    <!-- Start kode untuk form pencarian -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    <div class="row row-cols-md-6">
        @foreach ($heroes as $hero)
        <div class="cols mb-3">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container-card">
                    <div class="front" style="background-image: url(/assets/img/{{ $hero->poster }}">
                        <div class="inner">
                            <p class="hero-name">{{ $hero->name }}</p>
                            <span>Tap for details</span>
                        </div>
                    </div>
                    <div class="back" style="background-image: url(/assets/img/{{ $hero->poster }}">
                        <div class="inner">
                            <p class="card-text">Role: {{ $hero->role->name }}</p>
                            <p class="card-text">Specialty: {{ $hero->specialty->name }}
                                <!--&#11088;-->
                            </p>
                            <hr class="text-dark">
                            <a class="btn btn-sm btn-warning" href="{{ route('heroes.detail',$hero->id) }}">Detail Hero</a>
                            <a href="{{ route('detail',$hero->id) }}" class="btn btn-sm btn-warning" style="display:none">Detail Hero</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection