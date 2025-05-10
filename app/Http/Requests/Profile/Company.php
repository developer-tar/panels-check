<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;


class Company extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {

        $rules = [
            'email'                => ['required', 'email', 'max:255'],
            'phone'                => ['nullable', 'string', 'max:20'],
            'registration_number' => ['required', 'string', 'max:100'],
            'website_url'         => ['required', 'url', 'max:255'],
            'domain_id'           => ['nullable', 'integer'],
            'status'              => ['nullable', 'in:1,2'],
            'description'         => ['nullable', 'string'],
            'path'                => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
        
        if (request()->company_id === 'other' || request()->has('notAnyCompanyYet')) {
            $rules['company_name'] = ['required', 'string', 'max:255'];
            $rules['email'][] = 'unique:companies,email'; // append to existing rules
        }

        return $rules;
    }
}
