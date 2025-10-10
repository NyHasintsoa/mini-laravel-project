<?php

namespace App\Models\Enum;

enum PaymentMethod: string
{
    case MVOLA = 'MVOLA';
    case AIRTEL_MONEY = 'AIRTEL_MONEY';
    case ORANGE_MONEY = 'ORANGE_MONEY';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
