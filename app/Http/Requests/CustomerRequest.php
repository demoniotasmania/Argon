<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'string|required|min:10|max:150|unique:custumers,name' . $this->route("Customers"),
            'lastname'=>'string|required|min:10|max:150',
            'description'=>'string|required|min:10|max:150',
            'gmail'=>'string|required|min:10|max:150',
            'date_register' => 'required|date|after_or_equal:today',
            'phone' => 'string|required|min:9|max:9'
        ];
    }
}

