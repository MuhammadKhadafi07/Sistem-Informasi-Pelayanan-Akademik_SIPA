<?php

namespace App\Http\Requests\Admin\PengajuanLegalisir;

use Illuminate\Foundation\Http\FormRequest;

class TanggalRequest extends FormRequest
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
            'tanggal_diambil' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.'
        ];
    }
}
