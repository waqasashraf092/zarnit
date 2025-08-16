<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EarlyAccess extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'role',
        'interests',
    ];

    protected $casts = [
        'interests' => 'array',
    ];
}
