<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:5|max:50',
            'info' => 'required|string|min:10|max:500',
            'price' => 'required|integer',
            'firm_id' => 'required|integer',

        ];
    }

    public function messages(){
        return[
            'name.required' => 'Поле ИМЯ является обязательным для заполнения',
            'info.required' => 'Поле ОПИСАНИЕ является обязательным для заполнения',
            'firm.required' => 'Поле ФИРМА является обязательным для заполнения',

        ];
    }
}
