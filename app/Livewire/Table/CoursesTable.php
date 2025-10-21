<?php

namespace App\Livewire\Table;

use App\Models\Product\Course;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesTable extends Component
{
    use WithPagination;

    public string $search = '';

    #[Locked]
    public string $sortField = '';

    #[Locked]
    #[Validate('in:ASC,DESC')]
    public string $sortDirection = 'ASC';

    protected array $sortableFields = [];

    public function mount(): void
    {
        try {
            $this->validate();
        } catch (\Exception $e) {
            $this->sortField = '';
            $this->sortDirection = 'ASC';
        }
    }

    // public function sortBy(string $sortField): void
    // {
    //     if (! in_array($sortField, $this->sortableFields)) {
    //         return;
    //     }
    //     $this->resetPage();
    //     if ($sortField === $this->sortField) {
    //         $this->sortDirection = $this->sortDirection === 'ASC' ? 'DESC' : 'ASC';
    //     } else {
    //         $this->sortDirection = 'ASC';
    //         $this->sortField = $sortField;
    //     }
    // }

    public function render(): View
    {
        // $query = Book::orderBy($this->sortField, $this->sortDirection);
        // if ($this->search) {
        //     $query->whereLike($this->searchableField, "%{$this->search}%");
        // }

        return view('livewire.table.courses-table', [
            'data' => Course::paginate(10),
        ]);
    }
}
