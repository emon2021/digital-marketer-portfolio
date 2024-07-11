<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduTitle extends Model
{
    use HasFactory;
    protected $fillable = ['edu_title','edu_description'];
}
