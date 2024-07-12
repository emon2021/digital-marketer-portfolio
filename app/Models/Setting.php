<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'front_logo',
        'back_logo',
        'favicon',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'github',
    ];
}
