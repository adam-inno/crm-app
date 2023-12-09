<!-- resources/views/employees/edit.blade.php -->

@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2>Edit Employee</h2>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">Back to Employee List</a>
</div>

<hr>

<div class="card shadow-xs p-4">
    <form class="d-grid gap-3" action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"
                value="{{ $employee->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}"
                required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </div>
    </form>
</div>

@endsection