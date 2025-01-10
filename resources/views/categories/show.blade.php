<x-layouts.master>
    <x-slot:title>| Category | {{ $category->model_name ?? 'Not Found' }}</x-slot>
    <section class="hero-section">
        <h2>Model name is {{ $category->model_name ?? 'Not Found' }}</h2>
        <p>This is the category single page content.</p>


        @php

            $properties = ['id', 'category_name', 'created_at', 'updated_at'];
            $table_headers = ['ID', 'Category Name', 'Created at', 'Updated at', 'Actions'];

            $extra_models = $extra_models ?? [];
        @endphp

        @if ($category)
            <x-base-table-data :isPaginate="$category instanceof \Illuminate\Pagination\LengthAwarePaginator" :table_headers="$table_headers" :extra_models="$extra_models" route_name="category"
                :items="[$category]" :item_properties="$properties" />
        @else
            <p class="mt-30px">Data not found!</p>
        @endif


    </section>
</x-layouts.master>
