<?php

namespace App\Models\General\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class SubModule extends Model
{
    protected $fillable = [
        'module_id',
        'code',
        'name',
        'short',
        'description',
        'component',
        'view',
        'model',
        'controller',
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'sub_module_id');
    }
    public function methods() : HasManyThrough
    {
        return $this->hasManyThrough(Method::class , Application::class);
    }
}
