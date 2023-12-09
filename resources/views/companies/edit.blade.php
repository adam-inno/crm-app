@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2>Edit Company</h2>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary mb-3">Back to Company List</a>
</div>

<hr>

<div class="card shadow-xs p-4">
    <form class="d-grid gap-3" action="{{ route('companies.update', $company->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Company Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $company->email }}">
        </div>
        <div class="form-group">
            <label for="logo">Logo:</label>
            @if($company->logo)
            <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 100px;">
            @else
            No logo
            @endif
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="text" name="website" class="form-control" value="{{ $company->website }}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update Company</button>
        </div>
    </form>

</div>
@endsection