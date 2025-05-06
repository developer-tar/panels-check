<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CompanyCreateRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() {
        Gate::authorize('create-company');
 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'company_name'         => ['required', 'string', 'max:255'],
            'email'                => ['required', 'email', 'max:255'],
            'phone'                => ['nullable', 'string', 'max:20'],
            'type'                 => ['required', 'string', 'max:50'],
            'registration_number' => ['required', 'string', 'max:100'],
            'website_url'          => ['required', 'url', 'max:255'],
            'domain_id'            => ['nullable', 'integer'],
            'status'               => ['nullable', 'in:1,2'], // adjust as needed
            'description'          => ['nullable', 'string'],
            'path'                => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
