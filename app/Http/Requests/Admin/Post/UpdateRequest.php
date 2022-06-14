<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Введите заголовок для статьи',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Заполните краткое описание статьи',
            'preview_image.required' => 'Выберите изображение',
            'category_id.required' => 'Выберите категорию',
            'category_id.integer' => 'Id категории должен быть числом',
            'category_id.exists' => 'Id категории должен быть в бд',
        ];
    }
}
