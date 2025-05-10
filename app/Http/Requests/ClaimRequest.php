<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClaimRequest extends FormRequest
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
            'claim_amount_required' => ['required', 'numeric', 'min:0'],
            'company_id' => ['required', 'string'],
            'reason_for_takng_the_benefit' => ['nullable', 'string'],
            'claim_file' => 'required|file|mimes:pdf,doc,docx|max:2048',

        ];
    }
    public function messages(): array
    {
        return [
            'claim_file.required' => 'Please upload the file.',
        ];
    }
}
