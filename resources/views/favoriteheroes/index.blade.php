@extends('layouts.main')

@section('content')
@if (session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<h1 class="mt-4">Favorite Heroes Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Favorite Heroes</li>
    </ol>
    <a href="/favoriteheroes/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Favorite Heroes Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Hero</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Hero</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($favoriteheroes as $favoritehero)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $favoritehero->user->name }}</td>
                    <td>{{ $favoritehero->hero->name }}</td>
                    <td>{{ $favoritehero->date }}</td>
                    <td>{{ $favoritehero->notes }}</td>
                    <td>{{ $favoritehero->rating }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('favoriteheroes.show',$favoritehero->id) }}"><i
                                class="bi bi-eye text-white"></i></a>
                        <a class="btn btn-primary" href="{{ route('favoriteheroes.edit',$favoritehero->id) }}"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('favoriteheroes.destroy',$favoritehero->id) }}" method="POST">
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