<x-layouts.master>
    <x-slot:title>| Products</x-slot>
    <section class="hero-section">
        <h2>Welcome to the Product Page</h2>
        <p>This is the product page content.</p>

        @php
            $properties = ['id', 'model_name', 'brand', 'price'];
            $table_headers = ['ID', 'Model Name', 'Brand', 'Price', 'Supplier Name', 'Category Name', 'Actions'];
            $extra_models = $extra_models ?? ['supplier', 'category'];
        @endphp

        <div class="table-heading-actions mt-30px">
            <x-link-btn href="{{ route('products.create') }}">Create Product</x-link-btn>
        </div>
        <x-base-table-data :isPaginate="$products instanceof \Illuminate\Pagination\LengthAwarePaginator" :table_headers="$table_headers" :extra_models="$extra_models" route_name="products" :items="$products"
            :item_properties="$properties" />
    </section>
</x-layouts.master>
