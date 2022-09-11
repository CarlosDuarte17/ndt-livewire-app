<?php

namespace Database\Factories;

use App\Models\ShortLink;
use App\Support\NanoID\NanoID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ShortLink>
 */
class ShortLinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'hash' => resolve(NanoID::class)->generate(6),
            'target' => fake()->unique()->url(),
            'title' => fake()->unique()->words(3, true),
        ];
    }
}
