<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearDivisionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|unique:divisions,nombre|max:45|string',
            'supdivision'=>'nullable|string',
            'subdivision'=>'required|numeric|integer',
            'nivel'=>'required|numeric|integer|min:0|not_in:0',
            'cantidad'=>'required|numeric|integer|min:0|not_in:0',
            'embajador'=>'required|string'
        ];
    }
}
