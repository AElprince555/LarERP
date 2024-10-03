<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
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
        'sub_module_id',
    ];

    public function subModule(): BelongsTo
    {
        return $this->belongsTo(SubModule::class);
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class, 'application_id');
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
