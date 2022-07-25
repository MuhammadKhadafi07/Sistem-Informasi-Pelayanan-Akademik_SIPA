<?php

namespace App\Http\Requests\Superadmin\Pengguna;

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
            'nim' => 'required|unique:superadmin__mahasiswa',
            'nama' => 'required',
            'program_studi' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'no_telepon' => 'required',
            'angkatan' => 'required',
            'tanggal_lahir' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'Wajib diisi.',
            'unique' => 'Data sudah terdaftar.'
        ];
    }
}
