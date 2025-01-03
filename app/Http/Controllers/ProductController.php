<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::allProduct();

        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product', compact('product'));
    }
}
