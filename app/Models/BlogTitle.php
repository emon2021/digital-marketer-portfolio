<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTitle extends Model
{
    use HasFactory;
    protected $fillable = ['title','subtitle','subtitle_2'];
}
