<?php

namespace App\Http\Requests\Admin\Meal;

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
            'calories.required' => 'Необходимо заполнить калории',
            'calories.max' => 'Максимально кол-во символов 255',
            'weight.required' => 'Необходимо заполнить вес',
            'weight.max' => 'Максимально кол-во символов 255',
            'image.required' => 'Необходимо добавить изображение',
            'image.mimes' => 'Тип изображение должен быть jpeg или png',
            'image.max' => 'Максимальный размер изображения 1,5 мб',
        ];
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'calories' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png|max:1500',
        ];
    }
}