<?php

namespace App\Models\Enum;

enum PaymentCurrency: string
{
    case AR = 'AR';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
