@extends('layouts.main')

@section('content')<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Difficulty</h2>
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
        <form action="{{ route('difficulties.update', $difficulty->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="Easy" {{ $difficulty->level === 'Easy' ? 'selected' : '' }}>Easy</option>
                    <option value="Normal" {{ $difficulty->level === 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Hard" {{ $difficulty->level === 'Hard' ? 'selected' : '' }}>Hard</option>
                    <option value="Extreme" {{ $difficulty->level === 'Extreme' ? 'selected' : '' }}>Extreme</option>
                    <option value="Insane" {{ $difficulty->level === 'Insane' ? 'selected' : '' }}>Insane</option>
                    <option value="Epical Glory" {{ $difficulty->level === 'Epical Glory' ? 'selected' : '' }}>Epical Glory</option>
                </select>
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection