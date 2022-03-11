<?php

namespace App\Enum;

use Spatie\Enum\Enum;

/**
 * @method static self PENGURUS()
 * @method static self SANTRI()
 */
class StaticRoleEnum extends Enum 
{

    protected static function values(): \Closure
    {
        return function (string $name): string|int {
            return str_replace('_', ' ', mb_strtolower($name));
        };
    }
}