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
        'category',
        'duration',
        'price',
        'date'
    ];

    public function headquartersCourses(){
        return $this->hasMany('App\HeadQuartersCourse' , 'course_id' , 'id');
    }

    public function onlineCourses(){
        return $this->hasMany('App\OnlineCourses' , 'course_id' , 'id');
    }
}
