@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>User</h2>
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
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
        </div>
        
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" name="role" value="{{ $user->role }}" disabled>
        </div>
    </div>
</div>
@endsection