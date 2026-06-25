<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoRequest extends FormRequest
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
            'reference'=>'string|required|min:10|max:150',
            'amount'=>'string|required|min:10|max:150',
            'payment_date' => 'required|date|after_or_equal:today',
            'payment_method' => 'required|date|after_or_equal:today',
        ];
    }
}
