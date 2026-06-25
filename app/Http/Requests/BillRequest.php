<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
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
            'name_facture'=>'string|required|min:10|max:150' ,
            'invoice_number'=>'string|required|min:10|max:150',
            'issue_date' => 'required|date|after_or_equal:today',
            'subtotal'=>'string|required|min:10|max:150',
            'tax' => 'string|required|min:10|max:150',
            'total' => 'string|required|min:10|max:150',
            'status' => 'string|required|min:10|max:150',
            'type_facture' => 'required|in:si,no',
        ];

    }
}
