@extends('layouts.master')

@section('title', 'Products')


@section('content')
    <section class="hero-section">
        <h2>Model name is {{ $product['model_name'] }}</h2>
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

                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['model_name'] }}</td>
                        <td>{{ $product['category_name'] }}</td>
                        <td>{{ $product['brand'] }}</td>
                        <td>$ {{ number_format($product['price']) }}</td>
                        <td>
                            <a href="{{ route('products') }}">Back</a>
                        </td>
                    </tr>

                </tbody>


            </table>
        </div>
    </section>
@endsection
