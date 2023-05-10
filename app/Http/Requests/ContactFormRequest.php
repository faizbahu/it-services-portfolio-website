<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'fullname' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'email',
                'string',
            ],
            'phone' => [
                'required',
                'string',
            ],
            'services' => [
                'required',
                'array',
            ],
            'budget' => [
                'required',
                'string',
            ],
        ];
    }

     /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [

            'fullname' => 'Full Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'services' => 'Services',
            'budget' => 'Budget',
        ];
    }
}
