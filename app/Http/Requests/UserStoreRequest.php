<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
            // dd($this->all());
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
            'company_id' => 'required|exists:companies,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'current_salary_per_annum' => 'nullable|numeric',
            'experience_in_years' => 'nullable|integer|min:0',
            'experience_in_month' => 'nullable|integer|min:0|max:11',
            'age' => 'nullable|integer|min:16',
            'country_id' => 'required|in:' . implode(',', config('constants.country')),
            'email' => 'required|email|unique:users,email',
            'gender' => 'required|in:' . implode(',', config('constants.gender')),
            'password' => 'required|string|min:6',
            'path' => 'nullable|image|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'company_id.required' => 'Please select a company.',
            'company_id.exists' => 'Selected company does not exist.',
            'country_id.in' => 'The selected country is invalid.',
            'gender.in' => 'The selected gender is invalid.',
            'email.unique' => 'This email is already registered.',
        ];
    }
}
