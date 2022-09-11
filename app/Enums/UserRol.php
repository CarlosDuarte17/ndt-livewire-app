<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static CLIENT()
 * @method static static MANAGER()
 */
final class UserRol extends Enum
{
    const ADMIN = 'admin';
    const CLIENT = 'client';
    const MANAGER = 'manager';
}
