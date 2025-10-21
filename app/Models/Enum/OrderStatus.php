<?php

namespace App\Models\Enum;

enum OrderStatus: string
{
    case READY = 'READY';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
