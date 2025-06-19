<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        $rules = [
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'email', 'unique:users,email'],
            'password'   => ['required'],
        ];

        if ($this->routeIs('vendor.auth.sign-up-process')) {
            $rules['domain'] = ['required', 'integer'];
        }

        return $rules;
    }
}
