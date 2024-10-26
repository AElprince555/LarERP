<?php

namespace App\Models\General\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Method extends Model
{
    protected $fillable = [
        'application_id',
        'code',
        'name',
        'short',
        'description',
        'component',
        'view',
        'model',
        'controller',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}
