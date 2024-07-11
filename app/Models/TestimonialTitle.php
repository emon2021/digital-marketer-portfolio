<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialTitle extends Model
{
    use HasFactory;
    protected $fillable = ['testi_title', 'testi_description', 'testi_description_2'];
}
