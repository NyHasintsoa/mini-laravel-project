<?php

namespace App\Models;

use App\Models\Enum\TypeProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'file_path',
        'image_path',
        'product_type',
    ];

    protected function casts(): array
    {
        return [
            'product_type' => TypeProduct::class,
            'created_at' => 'immutable_datetime',
            'updated_at' => 'immutable_datetime'
        ];
    }
}
