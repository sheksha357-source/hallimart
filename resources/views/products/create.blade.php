@extends('layouts.app')

@section('content')
<div class="dashboard">

    <h2>Add Product 🏬</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" required>
        </div>

        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" required>
        </div>

        <button type="submit" class="mall-btn">Save Product</button>
    </form>

</div>
@endsection
