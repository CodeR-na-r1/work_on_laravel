<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email',
            'comment' => 'required|min:5|max:350'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя обязательно к заполнению',
            'email.required' => 'Поле email обязательно к заполнению',
            'comment.required' => 'Поле c комментарием обязательно к заполнению',
            'name.min' => 'Поле имя должно состоять не менее, чем из 2 символов',
            'comment.min' => 'Поле c комментарием должно состоять не менее, чем из 5 символов',
            'comment.max' => 'Поле c комментарием должно состоять не менее, чем из 350 символов'
        ];
    }
}