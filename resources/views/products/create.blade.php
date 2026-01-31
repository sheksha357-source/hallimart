@extends('layouts.app')

@section('content')
<div class="product-page">

    <div class="form-card">
        <h2 class="form-title">🏬 Add New Product</h2>
        <p class="form-subtitle">Village market items – animals, grains, tools, etc.</p>

        @if(session('success'))
            <div class="success-msg">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('products.store')   }}" enctype="multipart/form-data" class="product-form">
            @csrf

            <div class="form-group">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-input" placeholder="Cow, Goat, Rice Bag" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Price (₹)</label>
                    <input type="number" name="price" class="form-input" placeholder="5000" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-input" placeholder="10" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Product Image</label>
                <input type="file" name="image" class="form-file" accept="image/*">
            </div>

            <button type="submit" class="mall-btn">
                💾 Save Product
            </button>
        </form>
    </div>

</div>
@endsection
