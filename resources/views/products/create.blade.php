@extends('layouts.app')

@section('content')
<div class="dashboard">

    <div class="form-card">
        <h2>🏬 Add New Product</h2>
        <p class="subtitle">Village market items – animals, grains, tools, etc.</p>

        @if(session('success'))
            <div class="success-msg">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" placeholder="Cow, Goat, Rice Bag" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Price (₹)</label>
                    <input type="number" name="price" placeholder="5000" required>
                </div>

                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" placeholder="10" required>
                </div>
            </div>

            <div class="form-group">
                <label>Product Image</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <button type="submit" class="mall-btn">
                💾 Save Product
            </button>
        </form>
    </div>

</div>
@endsection
