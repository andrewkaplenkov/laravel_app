<?php

namespace App\Http\Requests\News;

use App\Enums\NewsStatuses;
use App\Models\Blog\News;
use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'categories' => ['required', 'array'],
            'title' => ['required', 'string', 'max:50'],
            'author' => ['required', 'string', 'max:50'],
            'body' => ['required', 'string', 'max:2000'],
            'image' => ['nullable']
        ];
    }
}
