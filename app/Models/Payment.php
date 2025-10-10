<?php

namespace App\Models;

use App\Models\Enum\PaymentCurrency;
use App\Models\Enum\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'phone',
        'amount',
        'method',
        'currency',
        'full_name',
        'address',
        'city',
        'message',
        'decision',
        'customer_ip_address',
        'transaction_type',
        'reference_number',
        'transaction_id',
    ];

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'payed_at' => 'immutable_datetime',
            'method' => PaymentMethod::class,
            'currency' => PaymentCurrency::class
        ];
    }
}
