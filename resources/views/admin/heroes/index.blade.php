@extends('layouts.main')

@section('content')
@if (session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<h1 class="mt-4">Heroes Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Heroes</li>
    </ol>
    <a href="/heroes/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Heroes Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Weapon</th>
                    <th>Role</th>
                    <th>Specialty</th>
                    <th>Difficulty</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Poster</th>
                    <th>Weapon</th>
                    <th>Role</th>
                    <th>Specialty</th>
                    <th>Difficulty</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($heroes as $hero)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $hero->name }}</td>
                    <td><img src="/assets/img/{{ $hero->poster }}" width="100px"></td>
                    <td>{{ $hero->weapon }}</td>
                    <td>{{ $hero->role->name }}</td>
                    <td>{{ $hero->specialty->name }}</td>
                    <td>{{ $hero->difficulty->level }}</td>
                    <td>{{ Str::limit($hero->description, 50) }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('heroes.show',$hero->id) }}"><i
                                class="bi bi-eye text-white"></i></a>
                        <a class="btn btn-primary" href="{{ route('heroes.edit',$hero->id) }}"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('heroes.destroy',$hero->id) }}" method="POST">
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