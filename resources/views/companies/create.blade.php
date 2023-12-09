@extends('layouts.app')

@section('content')
    <h2>Create Company</h2>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary mb-3">Back to Company List</a>

    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Company Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="logo">Logo:</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="text" name="website" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Company</button>
    </form>
@endsection
