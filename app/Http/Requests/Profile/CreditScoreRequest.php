<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class CreditScoreRequest extends FormRequest {
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
        
        return [
          'current_salary_per_annum' => 'required|numeric|min:0',
          'personal_loan' => 'nullable|numeric|min:0',
          'auto_loan' => 'nullable|numeric|min:0',
          'credit_card' => 'nullable|numeric|min:0',
          'overdraft' => 'nullable|numeric|min:0',
          'educational_loan' => 'nullable|numeric|min:0',
      ];
    }
}
