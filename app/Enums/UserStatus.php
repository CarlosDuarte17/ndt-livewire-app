<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @extends Enum<string>
 *
 * @method static static ACTIVE()
 * @method static static INACTIVE()
 */
final class UserStatus extends Enum
{
    public const ACTIVE = 'active';

    public const INACTIVE = 'inactive';
}
