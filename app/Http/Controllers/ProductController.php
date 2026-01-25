<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => 1,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success', 'Product added successfully');
    }
}
