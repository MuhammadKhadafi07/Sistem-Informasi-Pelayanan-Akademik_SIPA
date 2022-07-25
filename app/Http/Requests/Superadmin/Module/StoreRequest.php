<?php

namespace App\Http\Requests\Superadmin\Module;

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
            'app' => 'required',
            'tag' => 'required|unique:superadmin__module',
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'color' => 'required',
            'menu' => 'required',
            'url' => 'required|unique:superadmin__module'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Wajib diisi.',
            'unique' => 'Data sudah ada.'
        ];
    }
}
