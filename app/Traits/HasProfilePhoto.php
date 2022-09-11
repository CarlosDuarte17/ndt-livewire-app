<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * @property-read string $profile_photo_url
 */
trait HasProfilePhoto
{
    use Colors;

    /**
     * @return Attribute<string, string>
     */
    public function profilePhotoUrl(): Attribute
    {
        $initials = 'SN';

        if (trim($this->name)) {
            $initials = trim(collect(explode(' ', $this->name))->map(function ($segment) {
                return mb_substr($segment, 0, 1);
            })->implode(''));
        }

        $background = $this->getRandomColor();

        return Attribute::get(fn () => $this->getAvatarInitialsUrl($initials, $background));
    }

    public function getAvatarInitialsUrl(string $initials, string $background, int $size = 128): string
    {
        return "{$this->avatarApiUrl}?name={$initials}&color=fff&background={$background}&size={$size}";
    }
}
