<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['supplier', 'category'])->paginate(10);

        // foreach ($products as $product) {
        //     $supplier = $product->supplier;
        //     $product->supplier_name = $supplier->name;
        // }

        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product', compact('product'));
    }
}
