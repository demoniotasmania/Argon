<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiviteRequest extends FormRequest
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
            'name_activite'=>'string|required|min:10|max:150' ,
            'description'=>'string|required|min:10|max:2000',
            'date_activity' => 'required|date|after_or_equal:today',
            'start_time'=>'required|date|after_or_equal:today',
            'state' => 'string|required|min:10|max:1000',
            'final_time' => 'required|date|after_or_equal:today',
            'observation' => 'string|required|min:10|max:1000',
            'type_facture' => 'required|date|after_or_equal:today',
        ];
    }
}
