<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake() ->text(30),
            'body' => fake() ->realText(80),
            // ↓ post作成時に新しいuserを作成して、user_idには、そのuserのidを入れる
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
