<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class SubModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'short',
        'disc',
        'view',
        'model',
        'component',
        'permissions',
        'log',
        'settings',
        'module_id',
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'sub_module_id');
    }
    public function methods(): HasManyThrough
    {
        return $this->hasManyThrough(Method::class, Application::class);
    }
    protected function casts(): array
    {
        return [
            'permissions' => 'array',
            'log' => 'array',
            'settings' => 'array',
        ];
    }
}
