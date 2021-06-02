@extends('layout.layout')
@section('title', 'Users')
@section('content')

<a href="{{ route('create') }}" class="btn btn-success mb-2">Create new</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>
            <a href="{{ route('show', 1) }}" class="btn btn-primary btn-block">Show</a>
        </td>
        <td>
            <a href="#" class="btn btn-warning btn-block">Edit</a>
        </td>
        <td>
        <form action="#" method="POST">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    </tbody>
</table>
@endsection
