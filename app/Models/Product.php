<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    use HasFactory;


    // public static function allProduct(): \Illuminate\Support\Collection
    // {



    //     return collect([
    //         (object) [
    //             'id' => 1,
    //             'category_name' => 'Laptop',
    //             'model_name' => 'Inspiran',
    //             'brand' => 'Dell',
    //             'price' => 50000
    //         ],
    //         (object) [
    //             'id' => 2,
    //             'category_name' => 'Mobile',
    //             'model_name' => 'Galaxy',
    //             'brand' => 'Samsung',
    //             'price' => 10000
    //         ],
    //         (object) [
    //             'id' => 3,
    //             'category_name' => 'Tablet',
    //             'model_name' => 'iPad',
    //             'brand' => 'Apple',
    //             'price' => 30000
    //         ],
    //         (object) [
    //             'id' => 4,
    //             'category_name' => 'Smart Watch',
    //             'model_name' => 'Watch 6',
    //             'brand' => 'Realme',
    //             'price' => 5000
    //         ]
    //     ]);
    // }

    // public static function find(int $id): \stdClass
    // {
    //     $product = self::allProduct()->firstWhere('id', $id);

    //     if (!$product) {
    //         abort(404);
    //     }

    //     return $product;

    // }

    protected $fillable = [
        'model_name',
        'brand',
        'price'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "product_listing_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
