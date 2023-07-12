@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Difficulty</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('difficulties.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="card mb-4 mt-3">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Difficulty: {{ $difficulty->level }}
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <input type="text" class="form-control" name="level" value="{{ $difficulty->level }}" disabled>
            </div>
        </form>
    </div>
</div>
@endsection