<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @extends Enum<string>
 *
 * @method static static ADMIN()
 * @method static static CLIENT()
 * @method static static MANAGER()
 */
final class UserRole extends Enum
{
    public const ADMIN = 'admin';

    public const CLIENT = 'client';

    public const MANAGER = 'manager';
}
