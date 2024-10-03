<?php

namespace Database\Factories\System;

use App\Models\System\Module;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->word(),
            'short' => $this->faker->word(),
            'disc' => $this->faker->word(),
            'view' => $this->faker->word(),
            'model' => $this->faker->word(),
            'component' => $this->faker->word(),
            'permissions' => $this->faker->words(),
            'log' => $this->faker->words(),
            'settings' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
