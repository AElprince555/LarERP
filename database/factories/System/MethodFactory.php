<?php

namespace Database\Factories\System;

use App\Models\System\Application;
use App\Models\System\Method;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MethodFactory extends Factory
{
    protected $model = Method::class;

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

            'application_id' => Application::factory(),
        ];
    }
}
