@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>User's Favorite Hero</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('favoriteheroes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Form Input User's Favorite Heroes
    </div>
    <div class="card-body">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $favoritehero->user->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="hero" class="form-label">Favorite Hero</label>
            <input type="text" class="form-control" name="hero" value="{{ $favoritehero->hero->name }}" disabled>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" value="{{ $favoritehero->date }}" disabled>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" style="height:150px" name="notes" placeholder="Notes"
                disabled>{{ $favoritehero->notes }}</textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" name="rating" value="{{ $favoritehero->rating }}" disabled>
        </div>

    </div>
</div>
@endsection