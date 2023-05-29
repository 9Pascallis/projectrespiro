<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllocationRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = [
            'nama_allocation' => [
                'required',
                'unique:allocation',
            ],
        ];
        return $rules;
    }
}
