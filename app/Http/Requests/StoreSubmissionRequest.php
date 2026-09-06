<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubmissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', Rule::in(['contact', 'correction', 'broken_link', 'newsletter'])],
            'name' => ['nullable', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:255', 'required_if:type,newsletter'],
            'page_url' => ['nullable', 'url', 'max:2048'],
            'source_url' => ['nullable', 'url', 'max:2048'],
            'message' => ['nullable', 'string', 'max:5000', 'required_unless:type,newsletter'],
            'website' => ['prohibited'],
        ];
    }

    public function attributes(): array
    {
        return [
            'page_url' => 'page URL',
            'source_url' => 'source URL',
        ];
    }
}
