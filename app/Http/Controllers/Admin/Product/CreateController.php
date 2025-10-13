<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.product.create');
    }

    public function store(
        StoreProductRequest $request,
    ): RedirectResponse {
        dd($request->all());

        return redirect()
            ->route('admin.products.read')
            ->with('success', 'Produit créé avec succès !');
    }
}
