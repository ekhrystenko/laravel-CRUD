@extends('layout.layout')
@section('title', 'Phonebook')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </li>
        </ul>
    </div>
@endsection
