<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){

         return view ('user.courses.index')->with('courses' ,   Course::simplePaginate(4));
    }

    public function courseDetails($course_id){
          $course = Course::findOrFail($course_id);
        
         return view('user.courses.course-details')->with('course' ,Course::find($course_id));
    }

    public function getDataOfCourse(Request $request){
          $name = $request->input('search');
               if($name != ''){
                    $query = Course::where('title', 'like', '%'.$name.'%')
                    ->simplePaginate(15);
               return response()->json($query);
               }else{
                    return response()->json(['message' => 'failed']);
               }
    }
}
