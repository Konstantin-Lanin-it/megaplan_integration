<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormNewRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
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
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'middleName' => 'required|max:50',
            'phone' => 'required|max:50',
            'Email' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'firstName.required' => 'Поле Имя обязательное для заполнения',
            'lastName.required' => 'Поле Фамилия обязательное для заполнения',
            'middleName.required' => 'Поле Отчество обязательное для заполнения',
            'phone.required' => 'Поле Телефон обязательное для заполнения',
            'Email.required' => 'Поле Почта обязательное для заполнения',
        ];
    }
}

