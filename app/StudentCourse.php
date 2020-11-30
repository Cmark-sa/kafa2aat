<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = "student_courses";
    protected $fillable = ['user_id' , 'course_id'];
}
