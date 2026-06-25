<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Case_tableRequest extends FormRequest
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
            'title_case'=>'string|required|min:10|max:150|unique:case_tables,title_case' . $this->route("Case_table"),
            'file_number'=>'string|required|min:10|max:150',
            'apeture_case'=>'string|required|min:10|max:150',
            'state_case'=>'string|required|min:10|max:150',
            'date_cierre' => 'required|date|after_or_equal:today',
            'priority' => 'required|in:si,no',


        ];
    }
}
