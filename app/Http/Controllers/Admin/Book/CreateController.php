<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Book\StorebookRequest;
use App\Models\Entreprise;
use App\Models\Enum\TypeProduct;
use App\Models\Product\Book;
use App\Models\Product\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.book.create', [
            'entreprises' => Entreprise::all(),
        ]);
    }

    public function store(
        StorebookRequest $request,
    ): RedirectResponse {
        $data = $request->validated();

        /** @var UploadedFile */
        $bookFile = $request->validated('file_path');

        /** @var UploadedFile */
        $imageFile = $request->validated('image_path');

        $bookPath = $bookFile->store('products/books/file', 'public');
        $imagePath = $imageFile->store('products/books/image', 'public');

        $insertedProduct = [
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'product_type' => TypeProduct::BOOK,
            'entreprise_id' => $data['entreprise_id'],
        ];
        if ($imagePath) {
            $insertedProduct['image_path'] = $imagePath;
        }

        if ($bookPath) {
            $book = Book::create([
                'file_path' => $bookPath,
                'file_size' => $bookFile->getSize(),
            ]);
            $insertedProduct['product_id'] = $book->id;
            Product::create($insertedProduct);
        }

        return redirect()
            ->route('admin.books.read')
            ->with('success', 'Livre créée avec succès !');
    }
}
