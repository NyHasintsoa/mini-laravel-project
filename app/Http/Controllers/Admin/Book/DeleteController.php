<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\Product\Book;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DeleteController extends Controller
{
    public function __invoke(Book $book): RedirectResponse
    {
        return redirect()
            ->route('admin.books.read')
            ->with('success', 'Livre supprimée avec succès !');
    }
}
