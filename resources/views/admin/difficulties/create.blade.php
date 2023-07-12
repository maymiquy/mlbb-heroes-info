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
        Add New Difficulty
    </div>
    <div class="card-body">
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
</div>
@endsection