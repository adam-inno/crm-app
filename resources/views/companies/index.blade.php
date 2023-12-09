@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Company List</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-primary">Add Company</a>
</div>
<hr>
<div class="card p-4 shadow-xs">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if($companies->isEmpty())
            <tr>
                <td colspan="6">
                    No companies found.
                </td>
            </tr>
            @else
            @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                    @if($company->logo)
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 50px;">
                    @else
                    No logo
                    @endif
                </td>
                <td>{{ $company->website }}</td>
                <td class="text-end">
                    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST"
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
        {{ $companies->links('vendor.pagination.bootstrap-4') }}
    </div>
    @endif
    @endsection