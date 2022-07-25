<?php

namespace App\Http\Requests\Alumni\Etiket;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'masalah' => 'required',
            'tingkat_masalah' => 'required',
            'keterangan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'wajib diisi.'
        ];
    }
}
