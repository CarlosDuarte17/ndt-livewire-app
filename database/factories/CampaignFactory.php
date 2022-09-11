<?php

namespace Database\Factories;

use App\Enums\CampaignStatus;
use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Tiptap\Editor;

/**
 * @extends Factory<Campaign>
 */
class CampaignFactory extends Factory
{
    public function definition(): array
    {
        $paragraphs = fake()->paragraphs(10);

        $content = $this->paragraphsToTiptap($paragraphs);

        return [
            'created_by' => User::factory(),
            'content' => $content,
            'status' => CampaignStatus::PRIVATE,
            'summary' => Str::limit($paragraphs[0]),
            'title' => fake()->sentence(),
        ];
    }

    private function paragraphsToTiptap(array $paragraphs): string
    {
        return (new Editor())->setContent(
            collect($paragraphs)
                ->map(fn (string $paragraph) => "<p>$paragraph</p>")
                ->implode('')
        )->getHTML();
    }
}
