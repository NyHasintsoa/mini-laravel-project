<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Product\Course;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DeleteController extends Controller
{
    public function __invoke(Course $course): RedirectResponse
    {
        return redirect()
            ->route('admin.courses.read')
            ->with('success', 'Cours supprimée avec succès !');
    }
}
