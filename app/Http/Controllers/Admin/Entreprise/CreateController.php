<?php

namespace App\Http\Controllers\Admin\Entreprise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Entreprise\StoreEntrepriseRequest;
use App\Models\Entreprise;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.entreprise.create');
    }

    public function store(
        StoreEntrepriseRequest $request,
    ): RedirectResponse {
        Entreprise::create($request->validated());

        return redirect()
            ->route('admin.entreprises.read')
            ->with('success', 'Entreprise créée avec succès !');
    }
}
