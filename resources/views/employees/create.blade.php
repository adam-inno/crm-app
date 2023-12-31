@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2>Create Employee</h2>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">Back to Employee List</a>
</div>

<hr>

<div class="card shadow-xs p-4">
    <form class="d-grid gap-3" action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="company_id">Company:</label>
            <select name="company_id" class="form-control" required>
                @foreach($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary g-col-6">Create Employee</button>
        </div>
    </form>
</div>

@endsection