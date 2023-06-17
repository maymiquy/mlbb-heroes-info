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
    
    <form> 
        @csrf
        @method('PUT')
     
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <select id="users_id" name="users_id" class="form-select" disabled>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $favoritehero->users_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hero:</strong>
                    <select id="heroes_id" name="heroes_id" class="form-select" disabled>
                        @foreach ($heroes as $hero)
                            <option value="{{ $hero->id }}" {{ $hero->id == $favoritehero->heroes_id ? 'selected' : '' }}>{{ $hero->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" value="{{ $favoritehero->date }}" class="form-control" disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Notes:</strong>
                    <textarea class="form-control" style="height:150px" name="notes" placeholder="Notes" disabled>{{ $favoritehero->notes }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rating:</strong>
                    <input type="number" name="rating" value="{{ $favoritehero->rating }}" class="form-control" placeholder="Rating" disabled>
                </div>
            </div>
        </div>
     
    </form>
@endsection