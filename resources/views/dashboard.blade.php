@extends('layouts.app')

@section('content')
<div class="dashboard">

    <div class="dashboard-header">
        <div class="dashboard-title">
            <h1>Dashboard</h1>
        </div>

        <div class="user-info">
            <h3 class="user-name">Welcome, {{ session('username') }}</h3>
            <p class="user-email">{{ session('email') }}</p>
        </div>
    </div>

    <div class="dashboard-body">

        <div class="dashboard-card">
            <h4 class="card-title">Profile</h4>
            <p class="card-text">You are successfully logged in.</p>
        </div>

        <div class="dashboard-card card-center">
            <a href="{{ route('products.create') }}" class="mall-btn">
                🏬 Add Product
            </a>
        </div>

    </div>

</div>
@endsection
