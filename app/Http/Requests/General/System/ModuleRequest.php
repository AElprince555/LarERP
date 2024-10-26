<?php

namespace App\Http\Requests\General\System;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
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
