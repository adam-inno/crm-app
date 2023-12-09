@extends('layouts.app')

@section('content')
    <h2>Company Details</h2>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary mb-3">Back to Company List</a>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $company->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $company->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $company->email }}</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>
                    @if($company->logo)
                        <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 100px;">
                    @else
                        No logo
                    @endif
                </td>
            </tr>
            <tr>
                <th>Website</th>
                <td>{{ $company->website }}</td>
            </tr>
        </tbody>
    </table>
@endsection
