<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRequest extends FormRequest
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
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
