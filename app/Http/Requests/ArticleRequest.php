<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'max:255',
            ],
            'description' => [
                'string',
                'required',
                'min:10',
                'max:500',
            ],
            'content' => [
                'string',
                'required',
                'min:10',
            ],
            'image' => [
                'required',
                'image',
            ],
        ];
    }
}
