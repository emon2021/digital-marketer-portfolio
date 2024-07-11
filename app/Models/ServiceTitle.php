<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTitle extends Model
{
    use HasFactory;
    protected $fillable = ['top_title','mid_title','bottom_title'];
}
