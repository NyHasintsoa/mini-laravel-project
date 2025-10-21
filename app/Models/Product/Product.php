<?php

namespace App\Models\Product;

use App\Models\Enum\TypeProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\Product\ProductFactory> */
    use HasFactory;

    /**
     * Get the parent imageable model (user or post).
     */
    public function product(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'product_type', 'product_id');
    }

    protected $fillable = [
        'title',
        'description',
        'price',
        'file_path',
        'image_path',
        'product_type',
        'product_id',
        'entreprise_id',
    ];

    protected function casts(): array
    {
        return [
            'product_type' => TypeProduct::class,
            'created_at' => 'immutable_datetime',
            'updated_at' => 'immutable_datetime',
        ];
    }
}
