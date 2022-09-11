<?php

namespace App\Traits;

trait Colors
{
    public string $avatarApiUrl = 'https://ui-avatars.com/api/';

    public array $colors = [
        'brand-blue' => '65c6bd',
        'brand-gray' => '58595b',
        'brand-green' => '5dc797',
        'brand-light-gray' => 'b2b3b6',
        'brand-red' => 'f15a57',
        'brand-yellow' => 'fec163',
    ];

    public function getColor(string $key): string
    {
        return $this->colors[$key] ?? '';
    }

    public function getRandomColor(): string
    {
        return $this->getColor((string) array_rand($this->colors));
    }
}
