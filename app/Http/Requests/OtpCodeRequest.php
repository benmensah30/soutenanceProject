<?php

namespace App\Authentication;

class OtpCodeRequest
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return[
            'email' => 'required|min:3|max:128|email',
            'code' => 'required|min:3|max:6',
        ];
    }

    public function message(): array
    {
        return[
            'email.email' => 'L\'adresse e-mail est invalide.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.min' => 'L\'adresse e-mail doit contenir au minimum 3 caractères.',
            'email.max' => 'L\'adresse e-mail doit contenir au maximum 128 caractères.',
            'code.required' => 'Le code de confirmation est requis',
            'code.min' => 'Le code de confirmation  doit contenir au minimum 4 caractère',
            'code.max' => 'Le code de confirmation doit contenir au maximum 6 caractère',
        ];
    }
}
