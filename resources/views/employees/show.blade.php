@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2>Employee Details</h2>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">Back to Employee List</a>
</div>

<hr>

<div class="card shadow-xs p-4">
    <table class="table">
        <tbody>
            <div>
                <small class="text-secondary">ID</small>
                <p>{{ $employee->id }}</p>
            </div>
            <div>
                <small class="text-secondary">First Name</small>
                <p>{{ $employee->first_name }}</p>
            </div>
            <div>
                <small class="text-secondary">Last Name</small>
                <p>{{ $employee->last_name }}</p>
            </div>
            <div>
                <small class="text-secondary">Email</small>
                <p>{{ $employee->email }}</p>
            </div>
            <div>
                <small class="text-secondary">Phone</small>
                <p>{{ $employee->phone }}</p>
            </div>
        </tbody>
    </table>
</div>

@endsection