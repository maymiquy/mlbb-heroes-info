@extends('layouts.main')

@section('content')
@if (session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<h1 class="mt-4">Roles Data</h1>
<div class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Roles</li>
    </ol>
</div>

<a href="/roles/create" class="btn btn-primary mb-3">Create Role</a>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Roles Data
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
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ Str::limit($role->description, 50) }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i
                                class="bi bi-eye text-white"></i></a>
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
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