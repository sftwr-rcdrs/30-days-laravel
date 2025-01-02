<?php

namespace App\Models;

class Product
{
    public static function allProduct(): array
    {
        return [
            [
                'id' => 1,
                'category_name' => 'Laptop',
                'model_name' => 'Inspiran',
                'brand' => 'Dell',
                'price' => 50000
            ],
            [
                'id' => 2,
                'category_name' => 'Mobile',
                'model_name' => 'Galaxy',
                'brand' => 'Samsung',
                'price' => 10000
            ],
            [
                'id' => 3,
                'category_name' => 'Tablet',
                'model_name' => 'iPad',
                'brand' => 'Apple',
                'price' => '30000'
            ],
            [
                'id' => 4,
                'category_name' => 'Smart Watch',
                'model_name' => 'Watch 6',
                'brand' => 'Realme',
                'price' => 5000
            ]
        ];
    }

    public static function find(int $id): array
    {
        $product = \Illuminate\Support\Arr::first(static::allProduct(), fn($product) => $product['id'] == $id);

        if (!$product) {
            abort(404);
        }

        return $product;

    }
}
