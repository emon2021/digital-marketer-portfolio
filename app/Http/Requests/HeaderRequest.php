<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
            'designation' => 'required|max:100|min:3|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5000',
            'greetings' => 'required|max:100|min:3|string',
            'name' => 'required|max:100|min:3|string',
            'description' => 'required|min:3|string',
            'resume' => 'required|mimes:pdf|max:5000',
        ];
    }
}
