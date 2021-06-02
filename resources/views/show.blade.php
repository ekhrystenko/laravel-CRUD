@extends('layout.layout')
@section('title', $user->name)

@section('content')
    <div class="col-6 offset-3">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $user->name }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
                <li class="list-group-item">{{ $user->phone }}</li>
                <li class="list-group-item">
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
