<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Autoriser la requête (à adapter selon vos besoins d'authentification)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'teacher' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'min:0'],
        ];
    }

    /**
     * Messages de validation personnalisés.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Le titre du cours est obligatoire.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'description.required' => 'La description du cours est obligatoire.',
            'teacher.required' => 'Le nom du professeur est obligatoire.',
            'teacher.max' => 'Le nom du professeur ne peut pas dépasser 255 caractères.',
            'duration.required' => 'La durée du cours est obligatoire.',
            'duration.integer' => 'La durée doit être un nombre entier.',
            'duration.min' => 'La durée doit être d\'au moins 1 heure.',
            'price.required' => 'Le prix du cours est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix ne peut pas être négatif.',
        ];
    }
}
