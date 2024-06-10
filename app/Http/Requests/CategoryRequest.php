<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|min:1|max:20',
            'label' => 'required|min:1|max:50'
        ];
    }
}
