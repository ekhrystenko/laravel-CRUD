@extends('layout.layout')

@section('title', isset($user) ? 'Update' : 'Create new')

@section('content')
<div class="col-8 offset-2 mt-2">
    <h3 class="mb-4 text-center">{{ isset($user) ? 'Update'.$user->name : 'Create new' }}</h3>
    <form action="{{ route('user.store') }}" method="post">
        @csrf

        <div class="form-group mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        @error('email')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group mt-2">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        @error('phone')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn btn-primary mt-2">Create</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary mt-2">Back</a>
    </form>
</div>
@endsection
