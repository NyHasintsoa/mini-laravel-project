<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DeleteController extends Controller
{
    /**
     * Summary of __invoke.
     */
    public function __invoke(Entreprise $entreprise): RedirectResponse
    {
        $entreprise->delete();

        return redirect()
            ->route('admin.entreprises.read')
            ->with('success', 'Entreprise supprimée avec succès !');
    }
}
