<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ActualizarDivisionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:45|string|unique:divisions,nombre,'.$this->route('division')->id,
            'supdivision'=>'nullable|string',
            'subdivision'=>'required|numeric|integer',
            'nivel'=>'required|numeric|integer|min:0|not_in:0',
            'cantidad'=>'required|numeric|integer|min:0|not_in:0',
            'embajador'=>'required|string'
        ];
    }
}
