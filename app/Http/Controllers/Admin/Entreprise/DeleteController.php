<?php

namespace App\Http\Controllers\Admin\Entreprise;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DeleteController extends Controller
{
    public function __invoke(Entreprise $entreprise): RedirectResponse
    {
        $entreprise->delete();

        return redirect()
            ->route('admin.entreprises.read')
            ->with('success', 'Entreprise supprimée avec succès !');
    }
}
