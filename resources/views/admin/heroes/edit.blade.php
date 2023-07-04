@extends('layouts.main')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Hero</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('heroes.index') }}"> Back</a>
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
    
    <form action="{{ route('heroes.update',$hero->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $hero->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Weapon:</strong>
                    <input type="text" name="weapon" value="{{ $hero->weapon }}" class="form-control" placeholder="Weapon">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Poster:</strong>
                    <input type="file" name="poster" class="form-control" placeholder="Poster">
                    <img src="/assets/img/{{ $hero->poster }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role:</strong>
                    <select id="role_id" name="role_id" class="form-select">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $role->id == $hero->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Specialty:</strong>
                    <select id="specialty_id" name="specialty_id" class="form-select">
                        @foreach ($specialties as $specialty)
                            <option value="{{ $specialty->id }}" {{ $specialty->id == $hero->specialty_id ? 'selected' : '' }}>{{ $specialty->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Difficulty:</strong>
                    <select id="difficulty_id" name="difficulty_id" class="form-select">
                        @foreach ($difficulties as $difficulty)
                            <option value="{{ $difficulty->id }}" {{ $difficulty->id == $hero->difficulty_id ? 'selected' : '' }}>{{ $difficulty->level }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $hero->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection