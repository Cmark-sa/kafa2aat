<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use App\Specialist;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){

         return view ('user.courses.index')->with(['courses' =>   Course::all() ,
             'specialists' =>Specialist::titlesOnLY()]);
    }

    public function courseDetails($course_id){
          $course = Course::findOrFail($course_id);

         return view('user.courses.course-details')->with('course' ,Course::find($course_id));
    }

}
