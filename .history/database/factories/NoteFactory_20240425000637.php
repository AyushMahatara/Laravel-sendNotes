<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'send_date' => $this->faker->date,
            'is_published' => $this->faker->boolean,
            'heart_count' => $this->faker->numberBetween(0, 100),

        ];
    }
}