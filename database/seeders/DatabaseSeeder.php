<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Message;
use App\Models\ShortLinkClick;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Campaign::factory()->count(20)->create();
        Message::factory()->count(10)->create();
        ShortLinkClick::factory()->count(50)->create();
    }
}
