<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|',
            'rpe' =>  'required|string|unique:users',
            'password' => 'required|string|confirmed',
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'The name field is required',
            'name.string' => 'The name field must be a string',
            'name.max' => 'The name field must not exceed 255 characters',
            'rpe.required' => 'A rpe is required',
            'rpe.string' => 'The rpe field must be a string',
            'rpe.max' => 'The rpe field must not exceed 255 characters', 
            'rpe.unique' => 'The rpe field is already in use',
            'password.required' => 'The password field is required',
            'password.string' => 'The name field must be a string',
            'password.max' => 'The name field must not exceed 255 characters',
            'password.confirmed' => 'The password confirmation does not match',
        ];
    }
}
