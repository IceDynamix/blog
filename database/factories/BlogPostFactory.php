<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $words = [];

        for ($i = 0; $i < 5; $i++) {
            $words[$i] = $this->faker->word();
        }

        return [
            'title' => $this->faker->text(30),
            'content' => $this->faker->text(500),
            'tags' => implode(",", $words)
        ];
    }
}
