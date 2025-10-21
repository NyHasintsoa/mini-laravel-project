<?php

namespace App\Livewire\Table;

use App\Livewire\Components\DataTableComponent;
use App\Models\Entreprise;

class EntreprisesTable extends DataTableComponent
{
    protected $model = Entreprise::class;

    protected string $view = 'livewire.table.entreprises-table';

    public string $sortField = 'name';

    protected string $searchableField = 'name';

    protected string $initialSortField = 'name';

    protected array $sortableFields = [
        'name',
        'activity',
        'created_at',
    ];
}
