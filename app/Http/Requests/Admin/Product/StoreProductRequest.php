<?php

namespace App\Http\Requests\Admin\Product;

use App\Models\Enum\TypeProduct;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'unique:products', 'min:2', 'max:200'],
            'description' => ['required', 'string', 'min:2'],
            'price' => ['required', 'numeric'],
            'product_type' => ['required', Rule::enum(TypeProduct::class)],
            'file_path' => ['required', 'extensions:pdf,docx'],
            'image_path' => ['extensions:jpg,png'],
        ];
    }
}
