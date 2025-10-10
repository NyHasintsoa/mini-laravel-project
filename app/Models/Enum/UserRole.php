<?php

namespace App\Models\Enum;

enum UserRole: string
{
    case USER = 'USER';
    case ADMIN = 'ADMIN';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
