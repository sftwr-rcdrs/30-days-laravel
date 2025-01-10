<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(\App\Models\Product::class, relatedPivotKey: 'product_listing_id');
    }
}
