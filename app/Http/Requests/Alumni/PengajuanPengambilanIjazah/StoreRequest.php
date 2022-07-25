<?php

namespace App\Http\Requests\Alumni\PengajuanPengambilanIjazah;

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
            'nim' => 'required|unique:superadmin__mahasiswa__pengajuanpengambilanijazah',
            'nama' => 'required',
            'no_hp' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.',
            'unique' => 'Nim ini sudah mengajukan.',
        ];
    }
}
