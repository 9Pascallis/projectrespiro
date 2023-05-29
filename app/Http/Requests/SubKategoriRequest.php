<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubKategoriRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = [
            'nama_sub_kategori' => [
                'required',
                'unique:sub_kategori',
            ],
        ];
        return $rules;
    }
}
