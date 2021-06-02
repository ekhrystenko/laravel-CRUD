@extends('layout.layout')

@section('title', 'Users')

@section('content')

    @if(count($users))
        <a href="{{ route('user.create') }}" class="btn btn-success mb-2">Create new</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone}}</td>
                    <td>
                        <a href="{{ route('user.show', $user) }}" class="btn btn-primary btn-block">Show</a>
                        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning btn-block">Edit</a>
                        <form action="{{ route('user.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    @else
        <p class="text-center">Nothing found...</p>
    @endif

@endsection
