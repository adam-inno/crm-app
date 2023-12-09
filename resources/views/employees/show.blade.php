@extends('layouts.app')

@section('content')
    <h2>Employee Details</h2>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">Back to Employee List</a>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $employee->id }}</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td>{{ $employee->first_name }}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{ $employee->last_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $employee->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $employee->phone }}</td>
            </tr>
        </tbody>
    </table>
@endsection
