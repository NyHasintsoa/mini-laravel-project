<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\StorebookRequest;
use App\Models\Product\Book;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.course.create');
    }

    public function store(
        StorebookRequest $request,
    ): RedirectResponse {
        Book::create($request->validated());

        return redirect()
            ->route('admin.courses.read')
            ->with('success', 'Livre créée avec succès !');
    }
}
