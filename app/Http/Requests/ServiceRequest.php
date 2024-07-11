<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_img' => 'required|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
            'service_title' => 'required|min:3|max:100|string',
            'service_description' => 'required|min:3|string',
        ];
    }
}
