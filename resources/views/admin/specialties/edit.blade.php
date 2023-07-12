@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Specialty</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('specialties.index') }}"> Back</a>
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
        Specialty: {{ $specialty->name }}
    </div>
    <div class="card-body">
        <form action="{{ route('specialties.update',$specialty->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $specialty->name }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description"
                    style="height:250px">{{ $specialty->description }}</textarea>
            </div>
            <button type="submit" class="form-control btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection