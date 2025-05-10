<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserStoreRequest extends FormRequest {
    public function authorize(): bool {
        
        return true;
    }

    public function rules(): array {
        $rules =  [
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

        if (isset(request()->role) && request()->role !='hr') {
            $rules['role_id'] = 'required|in:' . implode(',', config('constants.roles'));
        }

        return $rules;
    }

    public function messages(): array {
        return [
            'company_id.required' => 'Please select a company.',
            'company_id.exists' => 'Selected company does not exist.',
            'country_id.in' => 'The selected country is invalid.',
            'gender.in' => 'The selected gender is invalid.',
            'email.unique' => 'This email is already registered.',
        ];
    }
}
