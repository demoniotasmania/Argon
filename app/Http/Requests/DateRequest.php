<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateRequest extends FormRequest
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
            'Description'=>'string|required|min:10|max:150' ,
            'Status'=>'string|required|min:10|max:150',
            'Observations'=>'string|required|min:10|max:150',
            'Location'=>'string|required|min:10|max:150',
            'Appointment time' => 'required|date|after_or_equal:today',
            'Appointment date' => 'required|date|after_or_equal:today',
        ];
    }
}

