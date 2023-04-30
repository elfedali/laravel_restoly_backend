@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>User: {{ $user['email'] }}</h1>
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> {{ $user['profile']['first_name'] }} {{ $user['profile']['last_name'] }}</p>
            <p><strong>Email:</strong> {{ $user['email'] }}</p>
            <p><strong>Phone:</strong> {{ $user['profile']['phone'] }}</p>
            <p><strong>Address:</strong> {{ $user['profile']['address'] }}</p>
            <p><strong>City:</strong> {{ $user['profile']['city'] }}</p>
            <p><strong>State:</strong> {{ $user['profile']['state'] ?? 'N/A' }}</p>
            <p><strong>Zip:</strong> {{ $user['profile']['zip'] }}</p>
            <p><strong>Country:</strong> {{ $user['profile']['country'] }}</p>
        </div>
        <div class="col-md-6">
            <h2>Verification</h2>
            <p><strong>Email Verification Status:</strong> {{ $user['email_verified_at'] ? 'Verified' : 'Not Verified' }}</p>
            <p><strong>Phone Verification Status:</strong> {{ $user['profile']['is_verified'] ? 'Verified' : 'Not Verified' }}</p>
        </div>
    </div>
</div>
@endsection