<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonDegreeCourse extends Model
{
    use HasFactory;
    protected $table = 'non_degree_courses';
    protected $fillable = ['programme_type', 'course_name'];
}
