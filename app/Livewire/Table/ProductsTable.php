<?php

namespace App\Livewire\Table;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductsTable extends Component
{
    public function render(): View
    {
        return view('livewire.products-table');
    }
}
