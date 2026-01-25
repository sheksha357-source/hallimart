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

        <!-- ADD PRODUCT BUTTON -->
        <div class="card text-center">
            <a href="{{ route('products.create') }}" class="mall-btn">
                🏬 Add Product
            </a>
        </div>
    </div>

</div>
@endsection
