<?php

namespace App\Http\Requests\Alumni\Alumni;

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
            'id_bukualumni' => 'required',
            'email' => 'required|email:rfc,dns',
            'foto' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'kegiatan_sekarang' => 'required',
            'saran_masukan' => 'required',
            'kesan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.',
            'email' => 'Email harus berupa alamat email yang valid.',
        ];
    }
}
