<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'name' => 'required',
            'dob' => 'required',
            'national_id' => 'required',
            'address_id' => 'required',
        ];
    }

    // uncoment if needed
    // protected function prepareForValidation(): void
    // {
    //     $this->merge([
    //         'address_id' => $this->address_id
    //     ]);
    // }
}
