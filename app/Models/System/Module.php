<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Module extends Model
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
    ];

    public function application(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\System\Application', 'App\Models\System\Module');
    }
    public function subModules(): HasMany
    {
        return $this->hasMany(SubModule::class, 'module_id');
    }
    public function methods(){
        return $this->hasManyThrough('App\Models\System\Method', 'App\Models\System\Application' ,'application_id', 'id');
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
