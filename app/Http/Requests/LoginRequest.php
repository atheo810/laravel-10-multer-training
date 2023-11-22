<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => ['required', 'alpha', 'min:6', 'max:30'],
            'email' => ['required', 'email'],
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "The Username field is required",
            'name.alpha' => "User name Should only containt letters",
            'email.email' => "This is not an email",
        ];
    }
}