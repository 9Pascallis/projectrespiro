<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UkuranRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        $rules = [
            'jenis_ukuran' => [
                'required',
                'unique:ukuran',
            ],
        ];
        return $rules;
    }
}
