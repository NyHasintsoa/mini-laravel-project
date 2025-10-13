<?php

namespace App\Livewire\Table;

use App\Livewire\Components\DataTableComponent;
use App\Models\Product;

class ProductsTable extends DataTableComponent
{
    protected $model = Product::class;
    protected string $view = 'livewire.table.products-table';

    public string $sortField = 'title';

    protected string $searchableField = 'title';

    protected string $initialSortField = 'title';

    protected array $sortableFields = [
        'title',
        'price',
        'product_type',
        'created_at',
    ];
}
