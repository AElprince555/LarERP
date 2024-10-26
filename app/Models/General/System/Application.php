<?php

namespace App\Models\General\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    protected $fillable = [
        'sub_module_id',
        'code',
        'name',
        'short',
        'description',
        'component',
        'view',
        'model',
        'controller',
    ];

    public function subModule(): BelongsTo
    {
        return $this->belongsTo(SubModule::class);
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class, 'application_id');
    }
}
