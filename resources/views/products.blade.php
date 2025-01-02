@extends('layouts.master')

@section('title', 'Products')


@section('content')
    <section class="hero-section">
        <h2>Welcome to the Product Page</h2>
        <p>This is the home page content.</p>

        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Model Name</th>
                        <th>Category Name</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($products))
                        <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                    @else
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product['model_name'] }}</td>
                                <td>{{ $product['category_name'] }}</td>
                                <td>{{ $product['brand'] }}</td>
                                <td>$ {{ number_format($product['price']) }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['id' => $product['id']]) }}">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>


            </table>
        </div>
    </section>
@endsection
