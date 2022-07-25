<?php

namespace App\Http\Requests\Superadmin\Pegawai;

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
            'foto' => 'required',
            'status_pegawai' => 'required',
            'nip' => 'required|unique:superadmin__pegawai',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
            'username' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.',
            'email' => 'Email harus berupa alamat email yang valid.',
            'unique' => 'Data sudah terdaftar.'
        ];
    }
}
