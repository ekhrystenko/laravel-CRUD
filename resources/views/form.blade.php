@extends('layout.layout')

@section('title', isset($user) ? 'Update '.$user->name : 'Create new')

@section('content')
    <div class="col-8 offset-2 mt-2">
        <h3 class="mb-4 text-center">{{ isset($user) ? 'Update '.$user->name : 'Create new' }}</h3>
        <form method="post"
            @if (isset($user))
                action="{{ route('user.update', $user) }}">
                @method('PUT')
            @else
                action="{{ route('user.store') }}">
            @endif
            @csrf
            <div class="form-group mt-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{ isset($user) ? $user->name : old('name') }}">
                @error('name')
                <div class="alert alert-danger mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control"
                       value="{{ isset($user) ? $user->email : old('email') }}">
            </div>
            @error('email')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
            @enderror

            <div class="form-group mt-2">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control"
                       value="{{ isset($user) ? $user->phone : old('phone') }}">
            </div>
            @error('phone')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
            @enderror
            @if(isset($user))
                <button type="submit" class="btn btn-warning mt-2">Update</button>
            @else
                <button type="submit" class="btn btn-primary mt-2">Create</button>
            @endif
            <a href="{{ route('user.index') }}" class="btn btn-secondary mt-2">Back</a>
        </form>
    </div>
@endsection
