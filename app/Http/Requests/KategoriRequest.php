<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = [
            'nama_kategori' => [
                'required',
                'unique:kategori',
            ],
        ];
        return $rules;
    }
}
