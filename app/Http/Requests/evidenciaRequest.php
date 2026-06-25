<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvidenciaRequest extends FormRequest
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
            'name'=>'string|required|min:10|max:150|unique:evidencias,name' . $this->route("evidencia"),
            'type_evidence'=>'required|in:mas,menos',
            'description'=>'string|required|min:10|max:150',
            'obseravtion'=>'string|required|min:10|max:150',
            'presentation_date' => 'required|date|after_or_equal:today',
            'state' => 'string|required|min:10|max:150'
        ];
    }
}

