
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Create Difficulty</h1>
        <form action="{{ route('difficulties.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="Easy">Easy</option>
                    <option value="Normal">Normal</option>
                    <option value="Hard">Hard</option>
                    <option value="Extreme">Extreme</option>
                    <option value="Insane">Insane</option>
                    <option value="Epical Glory">Epical Glory</option>
                </select>
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
