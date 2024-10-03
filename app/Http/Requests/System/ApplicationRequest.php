<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'code' => ['required'],
            'short' => ['required'],
            'disc' => ['required'],
            'view' => ['nullable'],
            'model' => ['nullable'],
            'component' => ['nullable'],
            'permissions' => ['nullable'],
            'log' => ['nullable'],
            'settings' => ['nullable'],
            'sub_module_id' => ['required', 'exists:sub_modules'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
