<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    protected $table = "registered_courses";
    protected $fillable = ['course_id' , 'user_id' , 'course_video','date'];

    public function user(){
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function course(){
        return $this->belongsTo('App\Course' , 'course_id');
    }
}
