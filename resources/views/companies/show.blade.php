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

@endsection