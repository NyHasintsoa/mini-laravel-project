<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class EditController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.product.edit');
    }
}
