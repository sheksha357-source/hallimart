@extends('layouts.app')

@section('content')
<div class="dashboard">

    <div class="dashboard-header">
        <h1>Dashboard</h1>
        <div class="user-info">
            <h3>Welcome, {{ session('username') }}</h3>
            <p>{{ session('email') }}</p>
        </div>
    </div>

    <div class="dashboard-body">
        <div class="card">
            <h4>Profile</h4>
            <p>You are successfully logged in.</p>
        </div>

        <div class="card">
            <h4>Session Info</h4>
            <pre>{{ print_r(session()->all(), true) }}</pre>
        </div>
    </div>

</div>
@endsection
