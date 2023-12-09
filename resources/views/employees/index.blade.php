@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Employee List</h2>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
</div>
<hr>
<div class="card p-4 shadow-xs">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($employees->isEmpty())
            <tr>
                <td colspan="6">
                    No employees found.
                </td>
            </tr>
            @else
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
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

    <div class="d-flex justify-content-center">
        {{ $employees->links('vendor.pagination.bootstrap-4') }}
    </div>
    @endif
</div>

@endsection