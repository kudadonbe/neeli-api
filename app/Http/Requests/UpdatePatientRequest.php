<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
        $method = $this->getMethod();
        
        if ($method === 'PUT') {
            return [
                'name' => 'required',
                'dob' => 'required',
                'national_id' => 'required',
                'address_id' => 'required',
            ];
        }
        
        return [
            'name' => ['sometimes','required'],
            'dob' => ['sometimes','required'],
            'national_id' => ['sometimes','required'],
            'address_id' => ['sometimes','required'],
        ];
    }
}
