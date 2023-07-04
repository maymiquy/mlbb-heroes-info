@extends('layouts.app')

@section('content')
<h1 class="text-white">Heroes</h1>
    <hr>

    
    <div class="wrapper-card">
        <div class="row row-cols-md-6">
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
                                <p class="card-text">Role: {{ $hero->role->name }}</p>
                                <p class="card-text">Specialty: {{ $hero->specialty->name }} <!--&#11088;--></p>
                                <hr class="text-dark">
                                <a href="/{{ $hero->id }}/detail" class="btn btn-sm btn-warning">Detail Hero</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
