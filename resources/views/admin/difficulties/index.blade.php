@extends('layouts.main')

@section('content')
@if (session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<h1 class="mt-4">Hero's Difficulty Data</h1>
<div class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Hero's Difficulty</li>
    </ol>
</div>
<a href="{{ route('difficulties.create') }}" class="btn btn-primary mb-3">Create Difficulty</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Hero's Difficulty Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($difficulties as $difficulty)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $difficulty->level }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('difficulties.show',$difficulty->id) }}"><i
                                class="bi bi-eye text-white"></i></a>
                        <a href="{{ route('difficulties.edit', $difficulty->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('difficulties.destroy', $difficulty->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection