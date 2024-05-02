<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
            'nom' => 'required|string',
            'email' => 'required|string',
            'content' => 'required|string',
            'publication' => 'required|exists:publications,slug',
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'Veuillez entrer votre nom',
            'email.required' => 'Veuillez entrer votre email',
            'content.required' => 'Veuillez entrer votre commentaire',
            'publication.required' => 'Veuillez entrer votre publication',
        ];
    }
}
