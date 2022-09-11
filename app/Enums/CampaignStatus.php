<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @extends Enum<string>
 * @method static static Public()
 * @method static static Private()
 */
final class CampaignStatus extends Enum implements LocalizedEnum
{
    public const PRIVATE = 'private';

    public const PUBLIC = 'public';
}
