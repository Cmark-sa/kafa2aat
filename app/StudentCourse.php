<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = "student_courses";
    protected $fillable = ['user_id' , 'course_id'];

    public function users(){
        return $this->hasMany('App\User' , 'user_id');
    }

    public function courses(){
        return $this->hasMany('App\Course' , 'course_id');
    }
}
