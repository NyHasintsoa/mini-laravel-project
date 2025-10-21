<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\UpdatebookRequest;
use App\Models\Product\Book;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class EditController extends Controller
{
    public function edit(): View
    {
        return view('admin.book.edit');
    }

    public function update(
        Book $book,
        UpdatebookRequest $request,
    ): RedirectResponse {
        $book->update($request->validated());

        return redirect()
            ->route('admin.entreprises.read')
            ->with('success', 'Entreprise modifiée avec succès !');
    }
}
