@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2>Company Details</h2>
    <a href="{{ route('companies.index') }}" class="btn btn-secondary mb-3">Back to Company List</a>
</div>

<hr>

<div class="card shadow-xs p-4">
    <div>
        <small class="text-secondary">ID</small>
        <p>{{ $company->id }}</p>
    </div>
    <div>
        <small class="text-secondary">Name</small>
        <p>{{ $company->name }}</p>
    </div>
    <div>
        <small class="text-secondary">Email</small>
        <p>{{ $company->email }}</p>
    </div>
    <div>
        <small class="text-secondary">Logo</small>
        <p>
            @if($company->logo)
            <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-widsmall: 100px;">
            @else
            No logo
            @endif
        </p>
    </div>
    <div>
        <small class="text-secondary">Website</small>
        <p>{{ $company->website }}</p>
    </div>
</div>

<hr>

<div class="card shadow-xs p-4">
    <h3>Company's Employees</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($company->employees->isEmpty())
            <tr>
                <td colspan="6">
                    No employees found for this company.
                </td>
            </tr>
            @else
            @foreach($company->employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td class="text-end">
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection