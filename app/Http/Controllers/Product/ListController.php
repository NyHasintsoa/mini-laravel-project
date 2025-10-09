<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ListController extends Controller
{
    public function __invoke(): View
    {
        return view('product.main-list');
    }
}
