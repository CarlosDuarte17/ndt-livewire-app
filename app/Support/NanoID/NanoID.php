<?php

namespace App\Support\NanoID;

use Hidehalo\Nanoid\Client;

class NanoID
{
    private string $alphabet;

    private int $size;

    public function __construct(private Client $client)
    {
        /** @var array{alphabet: string, size: int} $config */
        $config = config('nerdify.nano-id');

        $this->alphabet = $config['alphabet'];
        $this->size = $config['size'];
    }

    public function generate(?int $size = null, ?string $alphabet = null): string
    {
        return $this->client->formattedId(
            $alphabet ?? $this->alphabet,
            $size ?? $this->size
        );
    }
}
