<x-layouts.master>
    <x-slot:title>| Product | {{ $product->model_name }}</x-slot>
    <section class="hero-section">
        <h2>Model name is {{ $product->model_name }}</h2>
        <p>This is the home page content.</p>


        @php

            $properties = ['id', 'model_name', 'brand', 'price'];
            $table_headers = ['ID', 'Model Name', 'Brand', 'Price', 'Supplier Name', 'Category Name', 'Actions'];

            $extra_models = ['supplier', 'category'];
        @endphp
        <x-base-table-data :table_headers="$table_headers" :extra_models="$extra_models" item_name="products" :items="collect([$product])"
            :item_properties="$properties" />
    </section>
</x-layouts.master>
