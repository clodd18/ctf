<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReto extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|min:30',
            'enlace' => 'required|url|max:255',
            'flag' => 'required|max:255'
        ];
    }
}
