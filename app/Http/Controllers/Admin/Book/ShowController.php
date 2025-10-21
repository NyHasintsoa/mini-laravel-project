<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.book.show');
    }
}
