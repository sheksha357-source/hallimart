<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;


class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }


public function store(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
    ]);

    Products::create([
        'seller_id' => session('user_id'), // 👈 THIS FIXES THE ERROR
        'name'      => $request->name,
        'price'     => $request->price,
        'stock'     => $request->stock,
        'status'    => 1,
        'is_active' => 1,
        'category_id'=>session('user_id'),
        'slug'=>1,
    ]);

    return redirect()->back()->with('success', 'Product added successfully');
}


}
