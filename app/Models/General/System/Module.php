<?php

namespace App\Models\General\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Module extends Model
{
    protected $fillable = [
        'code',
        'name',
        'short',
        'description',
        'component',
        'view',
        'model',
        'controller',
    ];

    public function subModules(): HasMany
    {
        return $this->hasMany(SubModule::class, 'module_id');
    }
    public function applications() : HasManyThrough
    {
        return $this->hasManyThrough(Application::class, SubModule::class);
    }
}
