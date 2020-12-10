<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'title' ,
        'description',
        'code',
        'type',
        'specialist_id',
        'duration',
        'price',
        'date',
        'image_cover'
    ];

    public function headquartersCourses(){
        return $this->hasOne('App\HeadQuartersCourse' , 'course_id' , 'id');
    }

    public function onlineCourse(){
        return $this->hasOne('App\OnlineCourses' , 'course_id' , 'id');
    }

    public function specialist(){
        return $this->belongsTo('App\Specialist' , 'specialist_id' , 'id');
    }

    public function studentCourses(){
        return $this->hasMany('App\StudentCourse');
    }
}
