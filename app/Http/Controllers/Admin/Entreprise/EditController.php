<?php

namespace App\Http\Controllers\Admin\Entreprise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Entreprise\UpdateEntrepriseRequest;
use App\Models\Entreprise;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class EditController extends Controller
{
    public function edit(Entreprise $entreprise): View
    {
        return view('admin.entreprise.edit', [
            'data' => $entreprise,
        ]);
    }

    public function update(
        Entreprise $entreprise,
        UpdateEntrepriseRequest $request,
    ): RedirectResponse {
        $entreprise->update($request->validated());

        return redirect()
            ->route('admin.entreprises.read')
            ->with('success', 'Entreprise modifiée avec succès !');
    }
}
