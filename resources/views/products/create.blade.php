<x-layouts.master>
    <x-slot:title>| Product Create</x-slot>
    <section class="hero-section">
        <h2>Welcome to the Product Page</h2>
        <p>This is the create product page content.</p>


        <form action="{{ route('products.create') }}" method="POST" class="mt-30px">
            @csrf
            <div class="form-control">
                <label for="model_name">Model Name</label>
                <input type="text" id="model_name" name="model_name">
                @error('model_name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-control">
                <label for="brand">Brand Name</label>
                <input type="text" id="brand" name="brand">
                @error('brand')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-control">
                <label for="price">Price</label>
                <input type="text" id="price" name="price">
                @error('price')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-control">
                <select name="category_id" id="categories">
                    @foreach ($categories as $category)
                        <option value="" hidden selected>Select Category</option>
                        <option value="{{ $category->id }}">
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div class="form-control">
                <select name="supplier_id" id="suppliers">
                    @foreach ($suppliers as $supplier)
                        <option value="" hidden selected>Select Supplier</option>
                        <option value="{{ $supplier->id }}">
                            {{ $supplier->supplier_name }}
                        </option>
                    @endforeach
                </select>
                @error('supplier_id')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <x-base-btn type="submit">Save</x-base-btn>
        </form>

    </section>
</x-layouts.master>
