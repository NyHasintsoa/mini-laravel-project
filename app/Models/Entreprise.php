<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    /** @use HasFactory<\Database\Factories\EntrepriseFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'activity',
        'phone',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'immutable_datetime',
            'updated_at' => 'immutable_datetime'
        ];
    }
}
