@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Hero</h2>
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
        <form action="{{ route('heroes.update',$hero->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $hero->name }}">
            </div>

            <div class="mb-3">
                <label for="weapon" class="form-label">Weapon</label>
                <input type="text" class="form-control" name="weapon" value="{{ $hero->weapon }}">
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label><br>
                <img src="/assets/img/{{ $hero->poster }}" width="300px" class="img-thumbnail">
                <input type="file" name="poster" class="form-control" placeholder="Poster">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select id="role_id" name="role_id" class="form-select">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ $role->id == $hero->role_id ? 'selected' : '' }}>{{
                        $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty</label>
                <select id="specialty_id" name="specialty_id" class="form-select">
                    @foreach ($specialties as $specialty)
                    <option value="{{ $specialty->id }}" {{ $specialty->id == $hero->specialty_id ? 'selected' :
                        ''
                        }}>{{ $specialty->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="difficulty" class="form-label">Difficulty</label>
                <select id="difficulty_id" name="difficulty_id" class="form-select">
                    @foreach ($difficulties as $difficulty)
                    <option value="{{ $difficulty->id }}" {{ $difficulty->id == $hero->difficulty_id ?
                        'selected' :
                        '' }}>{{ $difficulty->level }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description"
                    style="height:250px">{{ $hero->description }}</textarea>
            </div>

            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection