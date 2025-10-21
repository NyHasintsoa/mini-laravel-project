<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\Product\BookFactory> */
    use HasFactory;

    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'file_path',
        'file_size',
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product_id');
    }

    public function productable(): MorphOne
    {
        return $this->morphOne(Product::class, 'products');
    }
}
