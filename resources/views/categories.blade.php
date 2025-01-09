<x-layouts.master>
    <x-slot:title>| Categories</x-slot>
    <section class="hero-section">
        <h2>Welcome to the Category Page</h2>
        <p>This is the category page content.</p>
    </section>

    <section class="hero-section">
        <h2>Welcome to the Categories Page</h2>
        <p>This is the Categories page content.</p>

        @php
            $properties = ['id', 'category_name', 'created_at', 'updated_at'];
            $table_headers = ['ID', 'Category Name', 'Created at', 'Updated at', 'Actions'];

            $extra_models = ['supplier', 'category'] ?? [];
        @endphp

        <x-base-table-data :isPaginate="$categories instanceof \Illuminate\Pagination\LengthAwarePaginator" :table_headers="$table_headers" :extra_models="$extra_models" item_name="categories" :items="$categories"
            :item_properties="$properties" />
    </section>
</x-layouts.master>
