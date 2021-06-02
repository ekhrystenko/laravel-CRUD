@extends('layout.layout')
@section('title', $user->name)

@section('content')
    <div class="col-6 offset-3">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Name: {{ $user->name }}</li>
                <li class="list-group-item">Email: {{ $user->email }}</li>
                <li class="list-group-item">Phone: {{ $user->phone }}</li>
                <li class="list-group-item">Created: {{ $user->created_at->format('d.m.y H:i:s') }}</li>
                <li class="list-group-item">Updated: {{ $user->updated_at->format('d.m.y H:i:s') }}</li>
                <li class="list-group-item">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
                    <a href="{{ route('user.edit', $user) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('user.destroy', $user) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
@endsection
