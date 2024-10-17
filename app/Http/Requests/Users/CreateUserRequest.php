<?php

namespace App\Http\Requests\Users;
use Illuminate\Foundation\Http\FormRequest;


class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:5|max:128',
            'email' => 'required|min:5|max:128',
            'password' => 'required|min:5|max:255|unique:users',
            'isadmin' => 'boolean',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom d\'utilistateur est obligatoire.',
            'name.min' => 'Le nom d\'utilisateur doit contenir au moins 5 caractères.',
            'email.min' => 'L\',adresse email saisi n\'est pas correct',
            'password.unique' => 'Il semblerait que le compte existe déjà',
            'password.min' => 'Le mot de passe doi contenir au moins 5 caractères',
        ];
    }
}