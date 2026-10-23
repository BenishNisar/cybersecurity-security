<?php

namespace App\Http\Requests;

use App\Models\Enquiry;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'min:2', 'max:120'], 'email' => ['required', 'email:rfc', 'max:254'],
            'company' => ['required', 'string', 'max:160'], 'role' => ['required', 'string', 'max:120'],
            'interest' => ['required', Rule::in(Enquiry::INTERESTS)], 'message' => ['required', 'string', 'min:10', 'max:4000'],
            'privacy_agreement' => ['accepted'], 'website_url' => ['nullable', 'prohibited'],
        ];
    }
}
