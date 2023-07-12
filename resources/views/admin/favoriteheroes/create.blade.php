@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add User's Favorite Heroes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('favoriteheroes.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with input.<br><br>
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
        Form Input User's Favorite Heroes
    </div>
    <div class="card-body">
        <form action="{{ route('favoriteheroes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="users_id" class="form-label">Username:</label>
                <select id="users_id" name="users_id" class="form-select">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="heroes_id" class="form-label">Heroes:</label>
                <select id="heroes_id" name="heroes_id" class="form-select">
                    @foreach ($heroes as $hero)
                    <option value="{{ $hero->id }}">{{ $hero->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" id="date" name="date" class="form-control">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes:</label> 
                <textarea class="form-control" style="height:150px" name="notes" placeholder="Notes"></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating:</label>
                <input type="number" id="rating" name="rating" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
</div>
@endsection