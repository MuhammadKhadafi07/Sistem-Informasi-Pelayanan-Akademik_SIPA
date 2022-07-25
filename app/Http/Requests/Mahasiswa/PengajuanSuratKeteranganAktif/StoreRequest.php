<?php

namespace App\Http\Requests\Mahasiswa\PengajuanSuratKeteranganAktif;

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
            'semester' => 'required',
            'alamat_rumahsekarang' => 'required',
            'nama_orangtua' => 'required',
            'tempat_kerja_orangtua' => 'required',
            'alamat_tinggal_orangtua' => 'required',
            'keperluan' => 'required',
            'no_telepon' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'wajib diisi.'
        ];
    }
}
