@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
        User: {{ $user->name }}
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <strong>Role:</strong>
                <select name="role" class="form-select">
                    <option value="{{ App\Models\User::ROLE_ADMIN }}" {{ $user->role ===
                        App\Models\User::ROLE_ADMIN ?
                        'selected' : '' }}>Admin</option>
                    <option value="{{ App\Models\User::ROLE_USER }}" {{ $user->role ===
                        App\Models\User::ROLE_USER ?
                        'selected' : '' }}>User</option>
                </select>
            </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
    </div>

    </form>
</div>
</div>
@endsection