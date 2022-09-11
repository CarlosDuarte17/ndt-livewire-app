<?php

namespace Database\Factories;

use App\Models\ShortLink;
use App\Models\ShortLinkClick;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\Uri\Uri;

/**
 * @extends Factory<ShortLinkClick>
 */
class ShortLinkClickFactory extends Factory
{
    public function definition(): array
    {
        $uri = Uri::createFromString(rtrim(fake()->url(), '/'));

        return [
            'short_link_id' => ShortLink::factory(),

            'browser' => fake()->randomElement(['Chrome', 'Edge', 'Firefox', 'Opera']),
            'country_code' => fake()->countryCode(),
            'device_type' => fake()->randomElement(['bot', 'desktop', 'mobile', 'tablet']),
            'referrer_hostname' => "{$uri->getScheme()}://{$uri->getHost()}",
            'referrer_pathname' => $uri->getPath() ?: null,
        ];
    }
}
