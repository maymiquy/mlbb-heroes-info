@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User's Favorite Hero</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('favoriteheroes.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Edit {{ $favoritehero->user->name }}'s Favorite Hero
    </div>
    <div class="card-body">
        <form action="{{ route('favoriteheroes.update',$favoritehero->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <select id="users_id" name="users_id" class="form-select">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $favoritehero->users_id ? 'selected' : ''
                        }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="hero" class="form-label">Favorite Hero</label>
                <select id="heroes_id" name="heroes_id" class="form-select">
                    @foreach ($heroes as $hero)
                    <option value="{{ $hero->id }}" {{ $hero->id == $favoritehero->heroes_id ? 'selected' : ''
                        }}>{{ $hero->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" value="{{ $favoritehero->date }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <textarea class="form-control" style="height:150px" name="notes"
                    placeholder="Notes">{{ $favoritehero->notes }}</textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" value="{{ $favoritehero->rating }}" class="form-control"
                    placeholder="Rating">
            </div>

            <button type="submit" class="form-control btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection