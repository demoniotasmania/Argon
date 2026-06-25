<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResolucionjudicialRequest extends FormRequest
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
            'resolution_number'=>'string|required|min:10|max:150' ,
            'description'=>'string|required|min:10|max:150',
            'resolution_date' => 'required|date|after_or_equal:today',
            'result'=>'string|required|min:10|max:150',
            'observation' => 'string|required|min:10|max:150',
            'state' => 'string|required|min:10|max:150'
        ];
    }
}
