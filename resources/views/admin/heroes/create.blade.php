@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Heroes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary mb-3" href="{{ route('heroes.index') }}"> Back</a>
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
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Form Input Data Heroes
    </div>
    <div class="card-body">
        <form action="{{ route('heroes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="poster" class="form-label">Poster:</label>
                <input type="file" id="poster" name="poster" class="form-control">
            </div>
            <div class="mb-3">
                <label for="weapon" class="form-label">Weapon:</label>
                <input type="text" id="weapon" name="weapon" class="form-control">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <select id="role" name="role_id" class="form-select">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty:</label>
                <select id="specialty" name="specialty_id" class="form-select">
                    @foreach ($specialties as $specialty)
                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="difficulty" class="form-label">Difficulty:</label>
                <select id="difficulty" name="difficulty_id" class="form-select">
                    @foreach ($difficulties as $difficulty)
                    <option value="{{ $difficulty->id }}">{{ $difficulty->level }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label> 
                <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
</div>
@endsection