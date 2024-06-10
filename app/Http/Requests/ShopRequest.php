<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|min:1|max:20',
            'address' => 'required|min:1|max:100',
            'info' => 'required|min:1|max:50'
        ];
    }
}
