<?php

namespace App\Http\Requests\Admin\Alumni;

use Illuminate\Foundation\Http\FormRequest;

class BukuAlumniRequest extends FormRequest
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
            'program_studi' => 'required',
            'tahun_lulus' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.'
        ];
    }
}
