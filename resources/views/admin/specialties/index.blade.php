@extends('layouts.main')

@section('content')
@if (session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<h1 class="mt-4">Hero's Specialty Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Hero's Specialty</li>
    </ol>
    <a href="/specialties/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Hero's Specialty Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($specialties as $specialty)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $specialty->name }}</td>
                    <td>{{ Str::limit($specialty->description, 50) }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('specialties.show',$specialty->id) }}"><i
                                class="bi bi-eye text-white"></i></a>
                        <a class="btn btn-primary" href="{{ route('specialties.edit',$specialty->id) }}"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('specialties.destroy',$specialty->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection