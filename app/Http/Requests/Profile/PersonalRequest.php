<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PersonalRequest extends FormRequest {
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'current_salary_per_annum' => 'required|numeric|min:0',
            'experience_in_years' => 'required|integer|min:0',
            'experience_in_month' => 'required|integer|min:0|max:11',
            'user_age' => 'required|integer|min:16',
            'gender' => 'required|in:' . implode(',', config('constants.gender')),
            'user_phone' => 'nullable|integer',
            'path' => 'nullable|image|max:2048',
        ];


        return $rules;
    }
}
