<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use HasFactory, SoftDeletes;

    protected $filable = [
        'description',
        'url',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
