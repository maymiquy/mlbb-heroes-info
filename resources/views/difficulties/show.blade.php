@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Difficulty</h1>
        <form>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select" disabled>
                    <option value="Easy" {{ $difficulty->level === 'Easy' ? 'selected' : '' }}>Easy</option>
                    <option value="Normal" {{ $difficulty->level === 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Hard" {{ $difficulty->level === 'Hard' ? 'selected' : '' }}>Hard</option>
                    <option value="Extreme" {{ $difficulty->level === 'Extreme' ? 'selected' : '' }}>Extreme</option>
                    <option value="Insane" {{ $difficulty->level === 'Insane' ? 'selected' : '' }}>Insane</option>
                    <option value="Epical Glory" {{ $difficulty->level === 'Epical Glory' ? 'selected' : '' }}>Epical Glory</option>
                </select>
            </div>
            <a href="{{ route('difficulties.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection