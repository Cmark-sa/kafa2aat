<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){

         return view ('user.courses.index')->with('courses' ,   Course::all());
    }

    public function courseDetails($course_id){
         return view('user.courses.course-details')->with('course' ,Course::find($course_id));
    }

}
