<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['supplier', 'category'])->latest()->paginate(10);

        // foreach ($products as $product) {
        //     $supplier = $product->supplier;
        //     $product->supplier_name = $supplier->name;
        // }

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with(['supplier', 'category'])->find($id);


        return view('products.show', compact('product'));
    }

    public function create()
    {

        $suppliers = Supplier::all();
        $categories = Category::all();

        return view('products.create', compact('suppliers', 'categories'));
    }

    public function store(Request $request)
    {
        $validateFields = $request->validate([
            'model_name' => ['required', 'min:3'],
            'price' => ['required'],
            'supplier_id' => ['required'],
            'category_id' => ['required'],
            'brand' => ['required', 'min:3'],
        ]);

        Product::create($validateFields);

        return redirect()->route('products.index');
    }



    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
