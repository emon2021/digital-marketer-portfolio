<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'short_title',
        'long_title',
        'long_title_2',
        'service_img',
        'service_title',
        'service_description',
    ];
}
