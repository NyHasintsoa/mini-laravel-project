<?php

namespace App\Livewire\Table;

use App\Livewire\Components\DataTableComponent;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;
    protected string $view = 'livewire.table.users-table';

    public string $sortField = 'name';

    protected string $searchableField = 'name';

    protected string $initialSortField = 'name';

    protected array $sortableFields = [
        'name',
        'role',
        'created_at',
    ];
}
