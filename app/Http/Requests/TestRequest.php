<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'name'=>'string|required|min:10|max:150|unique:tests,name' . $this->route("Test"),
            'Description'=>'string|required|min:10|max:150',
            'status'=>'string|required|min:10|max:150',
            'comments'=>'string|required|min:10|max:150',
            'submission_date' => 'required|date|after_or_equal:today',
            'test_type' => 'required|in:si,no',
        ];
    }
}

