<?php

namespace App\Http\Requests\Admin\Book;

use Illuminate\Foundation\Http\FormRequest;

class StorebookRequest extends FormRequest
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
            'file_path' => ['required', 'extensions:pdf,docx', 'file'],
            'image_path' => ['extensions:jpg,png', 'file'],
            'entreprise_id' => ['required', 'numeric'],
        ];
    }
}
