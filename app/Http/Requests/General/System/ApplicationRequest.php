<?php

namespace App\Http\Requests\General\System;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'sub_module_id' => [
                'required',
                'integer'
            ],
            'code' => ['required'],
            'name' => ['required'],
            'short' => ['required'],
            'description' => ['nullable'],
            'component' => ['nullable'],
            'view' => ['nullable'],
            'model' => ['nullable'],
            'controller' => ['nullable'],

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}