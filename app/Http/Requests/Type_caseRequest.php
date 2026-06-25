<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class type_case extends FormRequest
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
            'name'=>'string|required|min:10|max:150|unique:type_cases,name' . $this->route("Type_case"),
            'descripicion'=>'string|required|min:10|max:150',
            'code'=>'string|required|min:10|max:150',
            'state'=>'string|required|min:10|max:150'

        ];
    }
}
