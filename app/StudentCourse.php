<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $table = "student_courses";
    protected $fillable = ['user_id' , 'course_id'];

    public function user(){
        return $this->hasOne('App\User' , 'user_id');
    }

    public function course(){
        return $this->belongsTo('App\Course' , 'course_id' , 'id');
    }
}
