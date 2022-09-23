<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
       "title",
       "description",
       "weeks",
       "enroll_cost",
       "bootcamp_id",
       "minimun_skill"
    ];
}
