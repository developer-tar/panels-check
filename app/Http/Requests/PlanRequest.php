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
            'domain_id' => ['required', 'integer'],
            'start_period' => ['required', 'date'],
            'end_period' => ['required', 'date', 'after:start_period'],
            'coverage_limit' => ['required', 'numeric'],
            'eliegibility_rules' => ['required', 'string'],
            'automatice_reminder' => ['nullable', 'boolean'],
            'customization_notes' => ['required', 'string'],
        ];
    }
}
