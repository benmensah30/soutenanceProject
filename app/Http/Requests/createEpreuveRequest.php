<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createEpreuveRequest extends FormRequest
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
            'classe' => 'required|string|max:13',
            'niveau' => 'required|string|max:12',
            'matiere' => 'required|string|max:12',
            'contenue' => 'required|string'
        ];
    }
}
