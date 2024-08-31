<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'file' => 'bail|image|mimes:jpeg,jpg,png', // bail for error show one by one not all
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:10|max:150',
            'is_publish' => 'required',
            'is_active' => 'required'
        ];
    }
}
