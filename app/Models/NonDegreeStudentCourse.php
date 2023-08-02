<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonDegreeStudentCourse extends Model
{
    use HasFactory;
    protected $table = 'non_degree_student_courses';

    protected $fillable = ['student_id', 'course_name'];
}
