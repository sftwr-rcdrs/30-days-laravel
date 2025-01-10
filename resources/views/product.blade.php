<x-layouts.master>
    <x-slot:title>| Product | {{ $product->model_name ?? 'Not Found' }}</x-slot>
    <section class="hero-section">
        <h2>Model name is {{ $product->model_name ?? 'Not Found' }}</h2>
        <p>This is the home page content.</p>


        @php

            $properties = ['id', 'model_name', 'brand', 'price'];
            $table_headers = ['ID', 'Model Name', 'Brand', 'Price', 'Supplier Name', 'Category Name', 'Actions'];

            $extra_models = ['supplier', 'category'];
        @endphp

        @if ($product)
            <x-base-table-data :isPaginate=false :table_headers="$table_headers" :extra_models="$extra_models" item_name="products"
                :items="[$product]" :item_properties="$properties" />
        @else
            <p class="mt-30px">Data not found!</p>
        @endif


    </section>
</x-layouts.master>
