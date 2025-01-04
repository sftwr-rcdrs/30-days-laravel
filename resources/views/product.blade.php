<x-layouts.master>
    <x-slot:title>| Product | {{ $product->model_name }}</x-slot>
    <section class="hero-section">
        <h2>Model name is {{ $product->model_name }}</h2>
        <p>This is the home page content.</p>

        @php
            $properties = ['id', 'model_name', 'category_name', 'brand', 'price'];
        @endphp

        <x-base-table-data item_name="products" :items="collect([$product])" :item_properties="$properties" />
    </section>
</x-layouts.master>
