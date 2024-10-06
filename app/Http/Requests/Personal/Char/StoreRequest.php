<?php

namespace App\Http\Requests\Personal\Char;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nickname' => 'required|string|unique:chars,nickname',
            'fraction_id' => 'required|exists:fractions,id',
            'race_id' => 'required|exists:races,id',
            'grade_id' => 'required|exists:grades,id',
        ];
    }
}
