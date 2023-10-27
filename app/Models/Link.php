<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use HasFactory, SoftDeletes, HasUlids;

    protected $fillable = [
        'description',
        'url',
        'status',
        'expires_at',
    ];

    protected $casts = [
        'status' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
