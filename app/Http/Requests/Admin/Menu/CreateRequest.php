<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'Необходимо заполнить название',
            'name.max' => 'Максимально кол-во символов 255',
            'price.required' => 'Необходимо заполнить цену',
        ];
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|string',
        ];
    }
}