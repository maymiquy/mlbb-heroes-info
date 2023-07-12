@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detail Hero</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('heroes.index') }}"> Back</a>
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
        Hero {{ $hero->name }}
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $hero->name }}" disabled>
            </div>

            <div class="mb-3">
                <label for="weapon" class="form-label">Weapon</label>
                <input type="text" class="form-control" name="weapon" value="{{ $hero->weapon }}" disabled>
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label><br>
                <img src="/assets/img/{{ $hero->poster }}" width="300px" class="img-thumbnail">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role" value="{{ $hero->role->name }}" disabled>
            </div>

            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty</label>
                <input type="text" class="form-control" name="specialty" value="{{ $hero->specialty->name }}" disabled>
            </div>

            <div class="mb-3">
                <label for="difficulty" class="form-label">Difficulty</label>
                <input type="text" class="form-control" name="difficulty" value="{{ $hero->difficulty->level }}" disabled>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description"  style="height:250px"  placeholder="Description"
                    disabled>{{ $hero->description }}</textarea>
            </div>
        </form>
    </div>
    @endsection
</div>