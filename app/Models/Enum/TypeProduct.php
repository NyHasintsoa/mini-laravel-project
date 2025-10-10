<?php

namespace App\Models\Enum;

enum TypeProduct: string
{
    case COURSE = 'COURSE';
    case BOOK = 'BOOK';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
