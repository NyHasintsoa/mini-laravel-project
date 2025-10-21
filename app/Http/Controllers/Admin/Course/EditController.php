<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\UpdatebookRequest;
use App\Models\Product\Course;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class EditController extends Controller
{
    public function edit(): View
    {
        return view('admin.course.edit');
    }

    public function update(
        Course $course,
        UpdatebookRequest $request,
    ): RedirectResponse {
        $course->update($request->validated());

        return redirect()
            ->route('admin.courses.read')
            ->with('success', 'Entreprise modifiée avec succès !');
    }
}
