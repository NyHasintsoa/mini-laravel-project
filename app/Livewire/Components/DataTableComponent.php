<?php

namespace App\Livewire\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

abstract class DataTableComponent extends Component
{
    use WithPagination;

    /** @var Model */
    protected $model;

    protected string $view;

    public string $search = '';

    #[Locked]
    public string $sortField;

    protected string $initialSortField;

    protected string $searchableField;

    #[Locked]
    #[Validate('in:ASC,DESC')]
    public string $sortDirection = 'ASC';

    protected array $sortableFields;

    public function mount(): void
    {
        try {
            $this->validate();
        } catch (\Exception $e) {
            $this->sortField = $this->initialSortField;
            $this->sortDirection = 'ASC';
        }
    }

    public function sortBy(string $sortField): void
    {
        if (! in_array($sortField, $this->sortableFields)) {
            return;
        }
        $this->resetPage();
        if ($sortField === $this->sortField) {
            $this->sortDirection = $this->sortDirection === 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->sortDirection = 'ASC';
            $this->sortField = $sortField;
        }
    }

    public function render(): View
    {
        $query = $this->model::orderBy($this->sortField, $this->sortDirection);
        if ($this->search) {
            $query->whereLike($this->searchableField, "%{$this->search}%");
        }

        return view($this->view, [
            'data' => $query->paginate(10),
        ]);
    }
}
