<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'company_name' => ['required', 'string', 'max:255', 'unique:companies,company_name'],
            'email' => ['required', 'email', 'max:255', 'unique:companies,email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'type' => ['required', 'string', 'max:50'],
            'registration_number' => ['required', 'string', 'max:100'],
            'website_url' => ['required', 'url', 'max:255'],
            'domain_id' => ['nullable', 'integer'],
            'description' => ['required', 'string'],
            'path' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ];
    }
}
