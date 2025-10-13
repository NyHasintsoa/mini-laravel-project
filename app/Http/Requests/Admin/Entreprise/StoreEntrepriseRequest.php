<?php

namespace App\Http\Requests\Admin\Entreprise;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepriseRequest extends FormRequest
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
            'name' => ['required', 'string', 'unique:entreprises', 'min:2', 'max:200'],
            'email' => ['required', 'string', 'email', 'max:200'],
            'activity' => ['string', 'max:200'],
            'phone' => ['max:20'],
        ];
    }
}
