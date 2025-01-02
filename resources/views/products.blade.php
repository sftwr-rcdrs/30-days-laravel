<x-layouts.master>
    <x-slot:title>| Products</x-slot>
    <section class="hero-section">
        <h2>Welcome to the Product Page</h2>
        <p>This is the home page content.</p>

        @php
            $properties = ['id', 'model_name', 'category_name', 'brand', 'price'];
        @endphp

        <x-base-table-data item_name="products" :items="$products" :item_properties="$properties" />
    </section>
</x-layouts.master>